<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Order;
use ShoppingCart;
use Softon\Indipay\Facades\Indipay;
use Auth;
use App\Cart;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return ShoppingCart::all();
        $this->validate($request,[
            'name'      =>  'required',
            'email'     =>  'required',
            'mobile'    =>  'required',
            'address'   =>  'required',
            'aadhar'   =>  'required',
            'amount'   =>  'required',
            'policy'   =>  'required',
        ]);

       $order = new Order;
       $order->name     =  $request->name;
       $order->user_id  =  Auth::user()->id;
       $order->email    =  $request->email;
       $order->mobile   =  $request->mobile;
       $order->aadhar   =  $request->aadhar;
       $order->amount   =  $request->amount;
       $order->address  =  $request->address;
       if ($order->save()) {
            $carts = ShoppingCart::all();
            foreach ($carts as $value) {
               $cart = new Cart;
               $cart->user_id       =   Auth::user()->id;
               $cart->order_id      =   $order->id;
               $cart->product_id    =   $value->id;
               $cart->name          =   $value->name;
               $cart->price         =   $value->price;
               $cart->qty           =   $value->qty;
               $cart->subtotal      =   $value->qty*$value->price;
               $cart->save();
            }

            return $this->payNow($order);
            return back()->with(['class'=>'alert-info','message'=>'Your oorder has been created successfully!']);
        }else{
            return back()->with(['class'=>'alert-danger','message'=>'Soory something went wrong try again!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function payNow($data){
        $parameters = [
      
        'tid' => '1233221223322',
        
        'order_id' => '1232212',
        
        'amount' => '1200.00',
        
      ];
      
      $order = Indipay::prepare($parameters);
      return Indipay::process($order);
    }
}
