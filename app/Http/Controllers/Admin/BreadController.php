<?php
namespace App\Http\Controllers\Admin;

use App\Model\Admin\Menu;
use App\Model\Admin\Permission;
use App\Model\Admin\PermissionRole;
use App\Http\Controllers\Controller;
// use App\Http\Requests\Admin\Request;
use Illuminate\Http\Request;
class BreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::whereNotNull('table_name')->select('table_name','id')->get()->pluck('table_name');
        return view('admin.bread.list',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bread.create');
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
            'name' => 'required',
        ]);
        $table = str_slug($request->name, '_');
        if ($table != str_plural(str_singular($table))) {
            return redirect()->to(adminRoute('edit',str_plural(str_singular($table))));
        }
        return redirect()->route('admin.breads.edit', $table);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($table)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($table)
    {   
        if ($table != str_plural(str_singular($table))) {
            return redirect()->route('admin.'.request()->segment(2).'.edit',str_plural(str_singular($table)));
        }
        $menu = Menu::firstOrNew(['table_name'=>$table]);
        $perm=\App\Model\Admin\Permission::where('table_name',$menu->table_name)->get()->pluck('key')->toArray();
        return view('admin.bread.edit',compact('menu','perm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $table)
    {
        $bread=Menu::firstOrNew(['table_name'=>$table]);
        $bread->title=$request->name;
        $bread->icon=$request->icon;
        $bread->controller=$request->controller;
        if($bread->save())
        {
            $permission = Permission::where('table_name',$table)->get()->pluck('key');
            $permissions = collect($permission);
            $perm = $permissions->diff($request->permissions);

            if ($perm->count()) {
                Permission::where(['table_name'=>$table])->whereIn('key',$perm)->delete();
            }
            
            if ($request->permissions) {
                foreach ($request->permissions as $key=>$value) { 
                    $permission = Permission::firstOrNew(['key'=>str_plural(str_singular($value))]);
                    $permission->table_name = $table;
                    $permission->menu_id = $bread->id;
                    $permission->save();
                }
            }
            return redirect()->route('admin.breads.index')->with(['class'=>'success','message'=>'successfully updated']);
        }
        else{
            return redirect()->route('admin.breads.index')->with(['class'=>'error','message'=>'something went wrong']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($table)
    {
        $menu = Menu::where('table_name',$table);
        if ($menu->count()) {
            $permission = Permission::where('table_name',$menu->first()->table_name);
            foreach ($permission->get() as $perm) {
                PermissionRole::where('permission_id',$perm->id)->delete();
            }
            $permission->delete();
            $menu->delete();
        }
        return redirect()->back()->with(['class'=>'success','message'=>'Bread deleted successfully']);
        
    }

}
