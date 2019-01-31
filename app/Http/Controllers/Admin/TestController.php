<?php

namespace App\Http\Controllers\Admin;

use App\Model\ProductDescription;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use AdminLog;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        

        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {

        //return $request->name['english'];
        //dd($request->desc);
        //  $this->validate($request,[
        //     'name[]'=>'required',
        //     'tittle[]'=>'required',
        //     'keyword[]'=>'required',
        //     'description[]'=>'required',
        //     'keyfeature[]'=>'required',
                      
        // ]);
        
         // foreach ($request->desc as $key=>$value) {
         //    $pdescription = new ProductDescription();
         //    $pdescription->name = $value['name']; 
         //    $pdescription->tittle = $value['title'];
         //    $pdescription->keyword = $value['keywords'];       
         //    $pdescription->description = $value['description'];
         //    $pdescription->keyfeature = $value['keyfeatures']; 
         //    $pdescription->language = $key; 
         //    $pdescription->save();
         // }

         //  return redirect()->back();
       
        // if($pdescription->save()){          
        //     return redirect()->back();
        // }
        //return redirect()->back()->with(['class'=>'error','message'=>'Whoops, looks like something went wrong ! Try again ...']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

            // $data= array();
            // for ($i=50; $i <=1550 ; $i++) { 
            //      # code...
             
            //     $data[] = [
            //         'Code' => 'HI-T'.$i
            //     ];
            // }
            // $xls= \Excel::create('Coupen_500', function($excel) use($data) {

            //     $excel->sheet('Sheetname', function($sheet) use($data) {

            //         $sheet->fromArray($data);

            //     });

            // })->export('csv');
        // $order = \App\Model\Order::first();
        // dd(auth('admin')->user());
        // dd(\Gate::allows('test'));
        // dd(\Gate::abilities());
        // return view('welcome');
        // dd(\Gate::forUser(auth('admin')->user())->allows('browse_admin'));
        // dd($this->authorize('create-post'));
      //  AdminLog::write('create','product', array('User sent out 3 voucher.','sdfsdfs'));
        // dd($user->hasPermission());
        // dd($permissions = \App\Model\Permission::get()->toArray());
         // dd(app(\Gate::class));
        // return view('admin.product.description.create');
        //return view('admin.product.description.create',compact('offers','productid','units'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
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
    public function destroy(Request $request, $id)
    {
        //
    }
}
