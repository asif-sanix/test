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
        if ($request->ajax()) {
            $datas = Products::orderBy('created_at','desc')->select(['id','name','file','created_at','mrp','msp','stock']);
            $totaldata = $datas->count();
            $search = $request->search['value'];
            if ($search) {
                $datas->where('id', 'like', '%'.$search.'%')
                ->orWhere('name', 'like', '%'.$search.'%')
                ->orWhere('body', 'like', '%'.$search.'%');

            }
            # set datatable parameter 
            $result["length"]= $request->name;
            $result["recordsTotal"]= $totaldata;
            $result["recordsFiltered"]= $datas->count();
            $records = $datas->limit($request->length)->offset($request->start)->get();
            # fetch table records 
            $result['data'] = []; 
            $si = $request->start+1;          
            foreach ($records as $data) {

                $image = $data->file?'<img width="60" alt="'.$data->name.'" src="'.Storage::disk('local')->url($data->file).'">':'';
            
            $result['data'][] =[$data->name,@$image, $data->created_at->format('d-M-Y'), $data->id];
            }
            return $result;
        }
         return view('admin.product.list');
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
        $product->short_description = $request->short_description;
        $product->mrp = $request->mrp;
        $product->msp = $request->msp;
        $product->stock = $request->stock;
        $product->sku = $request->sku;
        $product->meta_title = $request->meta_title??$request->name;
        $product->meta_description = $request->meta_description??$request->name;
        if($product->save()){           
         return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=> ucfirst(str_singular(request()->segment(2))).' Successfully Created']);
        }
        return back()->with(array('message' => 'Something Wrong', 'class' => 'error'));
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
