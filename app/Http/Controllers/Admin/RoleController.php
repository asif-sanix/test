<?php

namespace App\Http\Controllers\Admin;

use AdminLog;
use App\Model\Admin\Role;
use App\Model\Admin\Permission;
use App\Model\Admin\PermissionRole;
use App\Http\Requests\Admin\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::all();
        return view('admin.role.list',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['role_name'=>'required|unique:roles,name']);
        $role = new Role;
        $role->name = $request->role_name;
        if($role->save()){
          return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Role Successfully Created']);
        }
        return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class' => 'success', 'message' => 'Admin Created successfully.']);
        return redirect()->back()->with(['status'=>'error','message'=>'Error in role creating... ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Role $role)
    {        
        return view('admin.role.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
      
        $permissions = Permission::has('menu')->get()->groupBy('table_name');
        return view('admin.role.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        Role::where(['id'=>$role->id])->update(['name'=>$request->role_name]);
         PermissionRole::where(['role_id'=>$role->id])->delete();
        if (request('permissions')) {
            foreach (request('permissions') as $key => $value) {
                $permission = new PermissionRole;
                $permission->role_id = $role->id;
                $permission->permission_id=$value;
                $permission->save();
            }

            return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Role Successfully Created']);
        }
        return redirect()->back()->with(['status'=>'success','message'=>'Permission alined success']);
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
