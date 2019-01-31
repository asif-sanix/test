<?php

namespace App\Helpers;

use App\Http\Resources\Api\CouponResource;
use App\Model\Cart;
use App\Model\Coupon;
use App\Model\PinList;
use App\Model\Product;
use App\Model\ProductInventory;
use Illuminate\Support\Facades\Cache;
use App\Model\ReferProduct;

class CommonCart
{
   
    public static function AddItem($data){

        if($invt = ProductInventory::select('id','stock', 'product_id')->where('id',$data->inventory_id)->first()) {

            if ($invt->stock >= $data->qty) {

                $cart = Cart::firstOrNew(['user_id'=>$data->user()->id, 'invt_id'=>$data->inventory_id]);
                $cart->product_id = $invt->product_id;
                $cart->qty = $data->qty;

                // return self::CartAll($data);

                if($cart->save()){
                    
                    return array('data'=>self::CartAll($data),'msg'=>'Added successfylly');
                }
            }
            // return response()->json(['error'=>true, 'msg'=>['Product Outofstock']]);
            return array('data'=>[],'msg'=>'Product out of stock');
        }
        return array('data'=>[],'msg'=>'product not aveliable');
    }

    public static function Total($Getdata){

        $items = Cart::where('user_id', $Getdata->user()->id)->get();

        $data['items'] = count($items);
        $data['total'] = 0;
        $data['sub_total'] = 0;
        $data['discount'] = 0;
        $data['refer_discount'] = 0;
        $data['charity'] = 0;
        $data['commision'] = 0;
        $data['tax'] = 0;
        $data['shipping_charge'] = 0;
        $data['coupon_discount'] = 0;

        

        if (Cache::has('COUPON'.$Getdata->user()->id)) {

            $key = Cache::get('COUPON'.$Getdata->user()->id, 'CouponCache');
            $key = json_decode($key,true)['code'];
            
            $SavedCoupon = Coupon::where('code',$key)->first();

            if ($SavedCoupon) {
                $data['coupon_discount'] = $SavedCoupon->discount;
            }

        }
        // return $data;

        if (Cache::has('PINCODE'.$Getdata->user()->id)) {
            $pinCode = Cache::get('PINCODE'.$Getdata->user()->id, 'PincodeCache');

            $SavedPin = PinList::where('pin_code',$pinCode)->first();

            if ($SavedPin) {
                $data['shipping_charge'] = $SavedPin->shipping_charge;
            }
        }
        $ref = ReferProduct::where(['refer_to'=>$Getdata->user()->refer_id,'used_status'=>0])->first();

        if ($ref) {
            $data['refer_discount'] = $ref->discount_amt;
        }

        foreach($items as $value){
            $product = Product::find($value->product_id);

            $invt = ProductInventory::select('id', 'mrp', 'msp','charity','commsion')->where('id', $value->invt_id)->first();


            $data['tax'] += @($product->tax*$value->qty);
            $data['charity'] += $invt->charity;
            $data['commision'] += $invt->commsion;
            $data['sub_total'] += @($invt->msp*$value->qty);

            if(@$invt->mrp > @$invt->msp){
                $data['discount'] += @($invt->mrp - $invt->msp)*$value->qty;
            }
            $data['total'] += @($invt->msp*$value->qty)+$data['tax'];
        }
        $data['total'] = $data['total'] - $data['coupon_discount']+ $data['shipping_charge']-$data['refer_discount'];
        return $data;

    }

    public static function CartAll($data){
        
        return $cart = Cart::where('user_id',$data->user()->id)->with('inventory')->get();
        
    }

    public static function RemoveItem($data){
    if(@$data->user()->id){
        $item = Cart::where(['invt_id'=>$data->item,'user_id'=>@$data->user()->id])->first();
        if ($item) {
            $item->delete();
            return response()->json(['msg'=>'Item has deleted successfuly'],200);
        }

        if (Cache::has('COUPON'.@$data->user()->id)) {

            Cache::forget('COUPON'.@$data->user()->id);

        }
    }
         
    }

    public static function Destroy($data){

        if (Cache::has('PINCODE'.$data->user()->id)) {
            Cache::forget('PINCODE'.$data->user()->id);
        }
        if (Cache::has('COUPON'.$data->user()->id)) {
            Cache::forget('COUPON'.$data->user()->id);
        }

        return Cart::where('user_id',$data->user()->id)->delete();

        
    }

    public static function UpdateCart($data){
        $cartItem = Cart::where(['user_id'=>$data->user()->id,'invt_id'=>$data->id])->first();
        $cartItem->qty = $data->qty;

        if ($cartItem->save()) {
            return response()->json(['msg'=>'Cart Updated Successfully'],200);
        }
        return response()->json(['msg'=>'Something Went wrong'],500);

    }
}