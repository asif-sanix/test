<?php

namespace App\Http\Controllers\Admin;

use AdminLog;
use App\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Request;
use App\Model\Admin\Role;
use Illuminate\Support\Facades\Storage;
use Image;

class AdminController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {

		if ($request->wantsJson()) {
			$datas = Admin::orderBy('created_at', 'desc')->select(['id', 'role_id', 'name', 'email', 'avatar']);

			$totaldata = $datas->count();
			$search    = $request->search['value'];
			if ($search) {
				$datas->where('id', 'like', '%'.$search.'%')
				      ->orWhere('name', 'like', '%'.$search.'%')
				      ->orWhere('email', 'like', '%'.$search.'%');

			}
			# set datatable parameter
			$result["length"]          = $request->length;
			$result["recordsTotal"]    = $totaldata;
			$result["recordsFiltered"] = $datas->count();
			$records                   = $datas->limit($request->length)->offset($request->start)->get();
			# fetch table records
			$result['data'] = [];
			foreach ($records as $data) {
				$roles = Role::select('id', 'name')->where('id', $data->role_id)->first();
				$result['data'][] = [$data->id, @$roles->name, @$data->name, $data->email, $data->id];
			}

			return $result;
		}
		return view('admin.admin.list');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request) {
		$roles = Role::select(['id', 'name'])->get()->pluck('name', 'id')->toArray();
		return view('admin.admin.create', compact('roles'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$this->validate($request, [
				'name'     => 'required',
				'image'    => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
				'role'     => 'required',
				'email'    => 'required|email',
				'password' => 'required|min:6'
			]);

		$admin = new Admin();

		if($request->hasFile('image')){
          $admin->avatar=$request->image->store('admin-asset/files/user');
         } else{
         	$admin->avatar = 'admin-asset/files/user/ctzvYQ7vuoJajCNXyYmFynNbhHmTGg78KiR91Rfd.png';
         } 

		$admin->role_id    = $request->role;
		$admin->name       = $request->name;
		$admin->email      = $request->email;
		$admin->mobile     = $request->mobile;
		$admin->address    = $request->address;
		$admin->gender     = $request->gender;
		$admin->password   = bcrypt($request->password);
		$admin->ip         = 1;
		$admin->allowed_ip = 1;
		$admin->status_id  = $request->status_id;
		if ($admin->save()) {
			

			return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class' => 'success', 'message' => 'Admin Created successfully.']);
		}

		return redirect()->back()->with(['class' => 'error', 'message' => 'Whoops, looks like something went wrong ! Try again ...']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Request $request, Admin $admin) {
		$roles = Role::select('id', 'name')->get()->pluck('name', 'id')->toArray();
		return view('admin.admin.edit', compact('admin', 'roles'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Admin $admin) {
		//dd($admin);
		//return $request->checkfile;
		$this->validate($request, [
				'name'  => 'required',
				'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2084',
				'role'  => 'required',
				'email' => 'required|email',

			]);

		if($request->hasFile('image')){
          $admin->avatar=$request->image->store('admin-asset/files/user');
         } 
         if($request->image == '' && $request->checkfile == '' ){
             $admin->avatar = 'admin-asset/files/user/ctzvYQ7vuoJajCNXyYmFynNbhHmTGg78KiR91Rfd.png';
         }

		if ($request->password) {
			$admin->password = bcrypt($request->password);
		}
		$admin->role_id    = $request->role;
		$admin->name       = $request->name;
		$admin->email      = $request->email;
		$admin->mobile     = $request->mobile;
		$admin->address    = $request->address;
		$admin->gender     = $request->gender;
		$admin->ip         = 1;
		$admin->allowed_ip = 1;
		$admin->status_id  = $request->status_id;

		if ($admin->save()) {
			
			return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class' => 'success', 'message' => 'Admin Updated successfully.']);
		}
		return redirect()->back()->with(['class' => 'error', 'message' => 'Whoops, looks like something went wrong ! Try again ...']);

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		if (Admin::where('id',$id)->delete()) {
			return response()->json(['message' => 'Admin deleted successfully ...', 'class' => 'success']);
		}
		return response()->json(['message' => 'Whoops, looks like something went wrong ! Try again ...', 'class' => 'error']);
	}
}
