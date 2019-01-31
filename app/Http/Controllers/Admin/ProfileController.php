<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Model\Role;
use Hash;
use Auth;
use App\Events\OtpEvent;
use App\Events\SendSmsEvent;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePasswordForm(Request $request, Admin $admin)
    {
        return view('admin.admin.profile.changepassword');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'current_password' => 'required|min:6',
            'new_password' => 'required|min:6|confirmed',
            'new_password_confirmation' => 'required|min:6|'

        ]);

        if(Hash::check($request->current_password, Auth::guard('admin')->user()->password)) {
            $admin = Auth::guard('admin')->user();
            $admin->password = bcrypt($request->new_password);
            if($admin->save()){
                return redirect()->back()->with(['message'=>'Password Changed Successfully...','class'=>'success']);
            }
            return redirect()->back()->with(['message'=>'Whoops, looks like something went wrong ! Try again ...','class'=>'danger']);
        }
        return redirect()->back()->withErrors(['current_password'=>'Your Current Password do not match']);
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
        //
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
