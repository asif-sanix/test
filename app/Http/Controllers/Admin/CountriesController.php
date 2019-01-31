<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Country;
use App\Http\Requests\Admin\Request;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $datas = Country::orderBy('name','asc')->select(['id','name','sortname','phonecode']);
            $totaldata = $datas->count();
            $search = $request->search['value'];
            if ($search) {
                $datas->where('id', 'like', '%'.$search.'%')
                ->orWhere('name', 'like', '%'.$search.'%')
                ->orWhere('phonecode', 'like', '%'.$search.'%');

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
             
                $result['data'][] =[$si,$data->name,@$data->sortname,@$data->phonecode,$data->id];
                $si++;
            }
            return $result;
        }
         return view('admin.countries.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
        //
        return $request->add;
        $countries = Country::all();
        return view('admin.countries.create', compact('countries'));
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
        $this->validate($request, [
            'country' => 'required',
            'sortname' => 'required',
            'phonecode' => 'required',
        ]);

        $country = new Country;
        $country->name = $request->country;
        $country->phonecode = $request->phonecode;
        $country->sortname = $request->sortname;
         

        if($country->save()){
            return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Country Successfully Created']);
         
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
    public function edit(Request $request, $id)
    {
        //
        $country = Country::where('id',$id)->first();
        //$countries = Country::select('name','id')->pluck('name','id');
        return view('admin.countries.edit', compact('country'));
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
         $this->validate($request, [
            'country' => 'required',
            'sortname' => 'required',
            'phonecode' => 'required',
        ]);

        $country = Country::find($id);
        $country->name = $request->country;
        $country->phonecode = $request->phonecode;
        $country->sortname = $request->sortname;
         

        if($country->save()){

            return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Country Successfully Updated']);
        }

        return back()->with(array('message' => 'Something Wrong', 'class' => 'error'));
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
         if(Country::where('id',$id)->delete()){
         return response()->json(['message'=>'Country deleted successfully ...', 'class'=>'success']); 
        }
        return back()->with(array('message' => 'Something Wrong', 'class' => 'error')); 
    }
}
