<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Product;
use App\Model\Admin\ProductInventory;
use App\Model\Admin\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new Product;
        $product->name = $request->name;
        $product->status = $request->status;
        $product->body = $request->body;
        $product->meta_title = $request->meta_title??$request->name;
        $product->meta_description = $request->meta_description??$request->name;
        if($product->save()){
            $product_inventories = new ProductInventory;
            $product_inventories->product_id =$product->id;
            $product_inventories->mrp = 100;
            $product_inventories->msp = 90;
            $product_inventories->stock = 200;
            $product_inventories->sku = 'abcd';
            if($product_inventories->save()){
                $product_image = new ProductImage;
                $product_image->inventory_id = $product_inventories->id;
                if($request->hasFile('file')){
                  $product_image->files=$request->file->store('admin-asset/ecommerce/product');
                 }
                 if($product_image->save()){
                     return "ok";
                 }
            }
           
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
}
