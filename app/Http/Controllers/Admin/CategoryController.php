<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Request;
use App\Model\Admin\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {
            $datas = Category::orderBy('created_at','desc')->select(['id','name','file','created_at','body']);
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
         return view('admin.category.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');

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
        //return $request->all();

        $this->validate($request,[
            'name' =>'required|max:255',
            'file' =>'image|mimes:jpeg,png,PNG,jpg,JPG,gif,svg|max:2048',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->body = $request->body;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title??$request->name;
        $category->meta_description = $request->meta_description??$request->name;
        if($request->hasFile('file')){
          $category->file=$request->file->store('admin-asset/ecommerce/category');
         }
        if($category->save()){
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
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
         $this->validate($request,[
            'name' =>'required|max:255',
            'file' =>'image|mimes:jpeg,png,PNG,jpg,JPG,gif,svg|max:2048',
        ]);

        //$category = Category::find();
        $category->name = $request->name;
        $category->body = $request->body;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title??$request->name;
        $category->meta_description = $request->meta_description??$request->name;
        if($request->hasFile('file')){
          $category->file=$request->file->store('admin-asset/ecommerce/category');
         } 
         if($request->file == '' && $request->checkfile == '' ){
             $category->file = NULL;
         }
        if($category->save()){
           return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=> ucfirst(str_singular(request()->segment(2))).' Successfully Created']);
        }
        return back()->with(array('message' => 'Something Wrong', 'class' => 'error'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
         if($category->delete()){
         return response()->json(['message'=>'Country deleted successfully ...', 'class'=>'success']); 
        }
        return back()->with(array('message' => 'Something Wrong', 'class' => 'error')); 
    }
}
