<?php 
Route::any('/', function() {
    return redirect()->route('admin.login.form');
});

Route::group(['middleware' => 'admin.guest'], function() {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login.form');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login.post');

    

    //Route::get('forget-password','Auth\ResetPasswordController')->name('admin.forget.password');
});



Route::group(['middleware' => 'admin','as' => 'admin.'], function() {   
    Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout.post');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');

    Route::get('change-password', 'ProfileController@changePasswordForm')->name('change-password');
    Route::put('change-password', 'ProfileController@updatePassword');

    Route::resource('/breads', 'BreadController');
    Route::get('roles-edit/{id}', 'RoleController@editname')->name('role.editname');
    Route::put('roles-editname/{id}', 'RoleController@updateName')->name('role.updatename');

    Route::get('otp', 'ProfileController@otp')->name('otp');

    

    foreach (App\Model\Admin\Menu::whereNotNull('controller')->get() as $menu){
            Route::resource(str_slug(strtolower($menu->table_name)), $menu->controller);
            Route::patch(str_slug(strtolower($menu->table_name)),$menu->controller.'@index')->name($menu->table_name.'.index');
    }
});

