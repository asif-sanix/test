<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('add-acrt/{id}', 'CartController@addCart')->name('cart.add');

Route::get('contact', function() {
    return view('contact');
})->name('contact');

Route::get('order-now', function() {
    return view('order_now');
})->name('order.now');

Route::post('order-now', 'OrderController@store')->name('order.now');

Route::post('contact', 'ContactController@store')->name('contact');

Route::get('cat/{slug}', function() {
    return back();
})->name('category.slug');

Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('wishlist-add/{id}', 'WishlistController@store')->name('add.wishlist');

Route::get('product-detail/{slug}', function($slug) {
	$data = App\Product::where('slug',$slug)->first();
// return back();
    return view('product_detail')->with('detail',$data);
})->name('product.detail');

Route::get('destroy-cart', 'CartController@destroyCart');

Route::get('files', function() {
	$path = ('popular_brand');
    $popular_brand = Storage::files($path);
    return collect($popular_brand);

});

Route::get('cart', function() {
	if (ShoppingCart::count()) {
		return view('cart');
	}
	return redirect('/');
    
})->name('cart');

Route::get('cart-remove/{id}', 'CartController@removeItem')->name('cart.item.remove');

Route::group(['prefix' => 'account','middleware'=>'auth'], function() {

    Route::get('/', function() {
	    return view('account');
	})->name('account');

	Route::get('wishlist-add/{id}', 'WishlistController@store')->name('add.wishlist');

	Route::get('checkout', function() {
	    return view('checkout');
	})->name('checkout');

	Route::post('checkout', 'CheckoutController@store')->name('checkout');

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
