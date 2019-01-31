<?php

namespace App\Helpers;
use App\Model\Coupon;
use App\Http\Resources\Api\CouponResource;
use Illuminate\Support\Facades\Cache;
use App\Model\Order;
use App\Model\OrderItem;
use App\Helpers\CommonCart;
use Illuminate\Support\Facades\Config;

use App\Model\UserAddress;
use App\Model\OrderShippingAddress;
use App\Model\OrderBillingAddress;
use App\Model\Cart;
use App\Mail\OrderInvoice;
use Mail;
use App\Model\ReferProduct;


class CommonOrder
{

  public static function CreateOrderCod($data) {

    

    // return $data->user()->id;
    $cart = CommonCart::Total($data);

    $CartItems = Cart::where('user_id',$data->user()->id)->get();

    // return $CartItems->first()->inventory;

    $minCod = Config::get('peeaco.min_amount_cod');
    $minMop = Config::get('peeaco.min_amount_cod');

    if (!$cart['items']) {

        return response()->json(['msg'=>'Your Cart has no data'],500);
    }

    $Address = UserAddress::find($data->billing_shipping);

    $shippingAddress = new OrderShippingAddress;
    $shippingAddress->user_id = $data->user()->id;
    $shippingAddress->address = $Address->address;
    $shippingAddress->city_id = $Address->city_id;
    $shippingAddress->country = $Address->country;
    $shippingAddress->email = $Address->email;
    $shippingAddress->mobile = $Address->mobile;
    $shippingAddress->name = $Address->name;
    $shippingAddress->pin = $Address->pin;
    $shippingAddress->state_id = $Address->state_id;

    // begain billing address save
    $billingAddress = new OrderBillingAddress;
    $billingAddress->user_id = $data->user()->id;
    $billingAddress->address = $Address->address;
    $billingAddress->city_id = $Address->city_id;
    $billingAddress->country = $Address->country;
    $billingAddress->email = $Address->email;
    $billingAddress->mobile = $Address->mobile;
    $billingAddress->name = $Address->name;
    $billingAddress->pin = $Address->pin;
    $billingAddress->state_id = $Address->state_id;
    $billingAddress->save();
    // End billing address save 
    // return $data->user()->id;
    if ($shippingAddress->save()) {
        $order = new Order;
        $order->user_id = $data->user()->id;
        $order->sub_total = $cart['sub_total'];
        $order->shipping_charge = $cart['shipping_charge'];
        $order->shipping_id = $shippingAddress->id;
        $order->discount = $cart['discount'];
        $order->refer_discount = $cart['refer_discount'];
        $order->coupon = $cart['coupon_discount'];
        $order->tax = $cart['tax'];
        $order->total = $cart['total'];
        if ($data->referId) {
            $order->refer_id = $data->referId;
        }
        $order->pay_mode = $data->paymod;
        $order->status = '3';
        $order->plateform = 'web';

        if ($order->save()) {
            // return $data->user()->id;
            foreach ($CartItems as  $value) {
                $CartData = new OrderItem;
                $CartData->user_id = $data->user()->id;
                $CartData->order_id = $order->id;
                $CartData->name = $value->product->name;
                $CartData->tax = $value->product->tax;
                $CartData->mrp = $value->inventory->mrp;
                $CartData->msp = $value->inventory->msp;

                $CartData->invt_data = $value->inventory->id;
                $CartData->product_data = $value->product->toJson();
                $CartData->image = $value->inventoryImage->image;

                $CartData->save();

                if ($data->referId) {
                    $ref = ReferProduct::firstOrNew(['user_id'=>$data->user()->id,'refer_to'=>$data->referId,'invt_id'=>$value->inventory->id]);
                    $ref->refer_id = $data->user()->refer_id;
                    $ref->discount_amt = 11;
                    $ref->save();
                }


            }

            Mail::to($data->user())->send(new OrderInvoice($order));   
            CommonCart::Destroy($data);
        }
    }

    return Order::where('id',$order->id)->with('shippingAddress')->first();
    // return response()->json(['error'=>true,'msg'=>['Cash on delivery order created'],'data'=>$order]);
    
  }

  public static function show($data) {
    return Order::where(['user_id'=>$data->user()->id,'id'=>$data->order_id])->first();
    // return $data;
  }

  public static function orderList($data) {

    return $data = Order::where('user_id',$data->user()->id)->latest()->get();

    // return $data;
  }
    
}