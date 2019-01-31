<?php




Route::post('/detail', 'ApiController@detail');
Route::post('/product-review/submit', 'ApiController@productReviewSubmit');
Route::post('/add-address', 'ApiController@addAddress')->name('user.addAddress.post');
Route::post('/add/address', 'UserController@addAddress');



Route::get('/profile', 'UserController@index');

Route::post('/update/profile', 'UserController@updateProfile')->name('user.updateProfile.post');

Route::post('gat/address', 'UserController@GatAddress');

Route::post('/update-mobile', 'UserController@updateMobile')->name('user.updateMobile.post');

Route::post('/update-email', 'UserController@updateEmail')->name('user.updateEmail.post');

Route::view('/change-password', 'user.change-password');

Route::post('/change/password', 'UserController@changePwd')->name('user.changePassword.post');


Route::view('/addresses', 'user.manage-address');


Route::post('/delete-address', 'UserController@delAddress')->name('user.deleteAddress.post');

Route::get('/edit-address/{id}', 'UserController@editAddress')->name('user.editAddress.post');

Route::post('/update-address', 'UserController@updateAddress')->name('user.updateAddress.post');

Route::post('/cities', 'UserController@getCities')->name('user.cities.post');

Route::view('/orders', 'user.my-orders');

Route::post('orders-data', 'OrderController@OrderData');

Route::post('order-data-single', 'OrderController@show');

Route::group(['as' => 'api.'], function() {

    Route::post('/address-list', 'ApiController@addressList');
});

Route::post('/checkout', 'OrderController@store');

// begain routes written by saksham
Route::post('get/state', 'UserController@GetState');

Route::post('get/dmt-bank-list', 'DmtController@BankList');

Route::post('get/dmt-add-benifecery', 'DmtController@AddBenifecery');

Route::post('get/dmt-all-benifecry', 'DmtController@AllBeneficary');

Route::post('get/dmt-transfer', 'DmtController@DmtTransfer');
 
Route::post('wishlist/get-data', 'WishlistController@index');

Route::post('wishlist/delete-data', 'WishlistController@Destroy');

Route::post('address/remove', 'UserController@RemoveAddress');

Route::post('address/edit/{id}', 'UserController@EditAddressUser');

Route::post('address/update/{id}', 'UserController@UpdateAddressUser');

Route::post('order-cancel/{id}', 'OrderController@CancelOrder');

// end routes written by saksham