<?php

namespace App\Http\Controllers;

use App\OrderNow;
use Illuminate\Http\Request;
use Validator;

class OrderController extends Controller
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
        $this->validate($request,[
            'name'      =>  'required',
            'email'     =>  'required|email',
            'mobile'    =>  'required',

        ]);

        $order = new OrderNow;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->mobile = $request->mobile;
        $order->message = $request->message;
        if ($order->save()) {
            return back()->with(['class'=>'alert-info','message'=>'Your oorder has been created successfully!']);
        }else{
            return back()->with(['class'=>'alert-danger','message'=>'Soory something went wrong try again!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderNow  $orderNow
     * @return \Illuminate\Http\Response
     */
    public function show(OrderNow $orderNow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderNow  $orderNow
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderNow $orderNow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderNow  $orderNow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderNow $orderNow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderNow  $orderNow
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderNow $orderNow)
    {
        //
    }
}
