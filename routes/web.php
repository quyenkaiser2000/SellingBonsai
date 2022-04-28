<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\Auth\SocicalController;
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

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);
/*
Route::get('/login-register', function () {
    return view('auth.login-register');
    //return \App\Models\Product::find(2)->productImage;
});
Route::get('/login-register', function () {
    return view('auth.login-register');
    //return \App\Models\Product::find(2)->productImage;
});*/
Route::group(['prefix' => 'admin','middleware' => ['auth','role:admin']],function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('adminHome');

    Route::get('/dashboard/Product', [App\Http\Controllers\Dashboard\ProductController::class, 'index'])->name('product');

    Route::get('/dashboard/Brand', [App\Http\Controllers\Dashboard\BrandController::class, 'index'])->name('brand');

    Route::get('/dashboard/ProductCategory', [App\Http\Controllers\Dashboard\ProductCategoryController::class, 'index'])->name('productcategory');

    Route::get('/dashboard/User', [App\Http\Controllers\Dashboard\UserController::class, 'index'])->name('user');

    //crud User
    Route::get('/dashboard/User/Create', [App\Http\Controllers\Dashboard\UserController::class, 'create'])->name('createUser');
    Route::post('/dashboard/User/Create', [App\Http\Controllers\Dashboard\UserController::class, 'store']);
    Route::get('/dashboard/User/{id}', [App\Http\Controllers\Dashboard\UserController::class, 'show']);

    //crud Brand
    Route::get('/dashboard/Brand/Create', [App\Http\Controllers\Dashboard\BrandController::class, 'create'])->name('createBrand');
    Route::post('/dashboard/Brand/Create', [App\Http\Controllers\Dashboard\BrandController::class, 'store']);
    Route::get('/dashboard/Brand/{id}', [App\Http\Controllers\Dashboard\BrandController::class, 'show']);
    Route::get('/dashboard/Brand/Update/{id}', [App\Http\Controllers\Dashboard\BrandController::class, 'edit']);
    Route::post('/dashboard/Brand/Update/{id}', [App\Http\Controllers\Dashboard\BrandController::class, 'update']);

    //crud productcategory
    Route::get('/dashboard/ProductCategory/Create', [App\Http\Controllers\Dashboard\ProductCategoryController::class, 'create'])->name('createProductCategory');
    Route::post('/dashboard/ProductCategory/Create', [App\Http\Controllers\Dashboard\ProductCategoryController::class, 'store']);
    Route::get('/dashboard/ProductCategory/{id}', [App\Http\Controllers\Dashboard\ProductCategoryController::class, 'show']);
    Route::get('/dashboard/ProductCategory/Update/{id}', [App\Http\Controllers\Dashboard\ProductCategoryController::class, 'edit']);
    Route::post('/dashboard/ProductCategory/Update/{id}', [App\Http\Controllers\Dashboard\ProductCategoryController::class, 'update']);
    Route::post('/dashboard/ProductCategory/DeleteImg',[App\Http\Controllers\Dashboard\ProductCategoryController::class, 'deleteimg'])->name('delete-img-category');

    //crud product
    Route::get('/dashboard/Product/Create', [App\Http\Controllers\Dashboard\ProductController::class, 'create'])->name('createProduct');
    Route::post('/dashboard/Product/Create', [App\Http\Controllers\Dashboard\ProductController::class, 'store']);
    Route::get('/dashboard/Product/{id}', [App\Http\Controllers\Dashboard\ProductController::class, 'show']);
    Route::get('/dashboard/Product/Update/{id}', [App\Http\Controllers\Dashboard\ProductController::class, 'edit'])->name('updateproduct');
    Route::post('/dashboard/Product/Update/{id}', [App\Http\Controllers\Dashboard\ProductController::class, 'update']);
    Route::post('/dashboard/Product/DeleteImg',[App\Http\Controllers\Dashboard\ProductController::class, 'deleteimg'])->name('delete-img');

    Route::get('/dashboard/kygui', [App\Http\Controllers\Dashboard\KyguiController::class, 'show'])->name('kygui');
    Route::get('/dashboard/kygui/active', [App\Http\Controllers\Dashboard\KyguiController::class, 'active']);
    Route::get('/dashboard/kygui/browse', [App\Http\Controllers\Dashboard\KyguiController::class, 'browse']);
    Route::get('/dashboard/kygui/browse/{id}', [App\Http\Controllers\Dashboard\KyguiController::class, 'showbrowse']);
    Route::post('/dashboard/kygui/browse/{id}', [App\Http\Controllers\Dashboard\KyguiController::class, 'browseproduct']);
    Route::get('/dashboard/kygui/delete/{id}', [App\Http\Controllers\Dashboard\KyguiController::class, 'delete']);


    Route::get('/dashboard/discount', [App\Http\Controllers\Dashboard\DiscountController::class, 'index'])->name('discount');
    Route::get('/dashboard/discount/Create', [App\Http\Controllers\Dashboard\DiscountController::class, 'create']);
    Route::post('/dashboard/discount/Create', [App\Http\Controllers\Dashboard\DiscountController::class, 'store']);
    Route::get('/dashboard/discount/{id}', [App\Http\Controllers\Dashboard\DiscountController::class, 'show']);
    Route::get('/dashboard/discount/Update/{id}', [App\Http\Controllers\Dashboard\DiscountController::class, 'edit']);
    Route::post('/dashboard/discount/Update/{id}', [App\Http\Controllers\Dashboard\DiscountController::class, 'update']);

    Route::get('/dashboard/order',[App\Http\Controllers\Dashboard\OrderController::class,'index'])->name('order');
    Route::get('/dashboard/order/pending',[App\Http\Controllers\Dashboard\OrderController::class,'orderpending']);
    Route::get('/dashboard/order/{id}',[App\Http\Controllers\Dashboard\OrderController::class,'show']);
    Route::get('/dashboard/order/pending/{id}',[App\Http\Controllers\Dashboard\OrderController::class,'showpending']);
    Route::get('/dashboard/order/{id}/pay',[App\Http\Controllers\Dashboard\OrderController::class,'pay']);
    Route::get('/dashboard/order/{id}/browse',[App\Http\Controllers\Dashboard\OrderController::class,'browse']);

    Route::get('/dashboard/order/delete/{id}',[App\Http\Controllers\Dashboard\OrderController::class,'delete']);

    Route::get('/dashboard/chart_js',[App\Http\Controllers\Dashboard\ChartJSController::class,'index']);

});



Route::group(['prefix' => 'user','middleware' => ['auth','role:user']],function(){ 
    Route::get('myaccount', [App\Http\Controllers\Auth\MyAccount\MyAccountController::class, 'show'])->name('myaccount');


    Route::get('myaccount/update', [App\Http\Controllers\Auth\MyAccount\UpdateController::class, 'show']);
    Route::post('myaccount/update', [App\Http\Controllers\Auth\MyAccount\UpdateController::class, 'update']);
    Route::post('myaccount/DeleteImg',[App\Http\Controllers\Auth\MyAccount\UpdateController::class, 'deleteavatar'])->name('delete_avatar');

    Route::get('myaccount/changepas', [App\Http\Controllers\Auth\MyAccount\ChangePasswordController::class, 'show']);
    Route::post('myaccount/changepas', [App\Http\Controllers\Auth\MyAccount\ChangePasswordController::class, 'changepas']);

    Route::get('myaccount/order', [App\Http\Controllers\Auth\MyAccount\OrderController::class, 'show']);
    Route::get('myaccount/order/detail/{id}', [App\Http\Controllers\Auth\MyAccount\OrderController::class, 'edit']);
    Route::post('myaccount/order/detail/{id}', [App\Http\Controllers\Auth\MyAccount\OrderController::class, 'update']);
    Route::get('myaccount/order/detail', [App\Http\Controllers\Auth\MyAccount\OrderController::class, 'updateqty']);
    Route::get('myaccount/order/detail/delete/{id}', [App\Http\Controllers\Auth\MyAccount\OrderController::class, 'delete']);



    Route::get('kygui', [App\Http\Controllers\Auth\MyAccount\KyguiController::class, 'show'])->name('kygui');
    Route::get('kygui/active', [App\Http\Controllers\Auth\MyAccount\KyguiController::class, 'active']);
    Route::get('kygui/browser', [App\Http\Controllers\Auth\MyAccount\KyguiController::class, 'browser']);

    Route::get('kygui/create', [App\Http\Controllers\Auth\MyAccount\KyguiController::class, 'create'])->name('createkygui');
    Route::post('kygui/create', [App\Http\Controllers\Auth\MyAccount\KyguiController::class, 'store']);
    Route::get('kygui/detail/{id}', [App\Http\Controllers\Auth\MyAccount\KyguiController::class, 'showdetail']);
    Route::get('kygui/update/{id}', [App\Http\Controllers\Auth\MyAccount\KyguiController::class, 'edit']);
    Route::post('kygui/update/{id}', [App\Http\Controllers\Auth\MyAccount\KyguiController::class, 'update']);
    Route::post('kygui/DeleteImg',[App\Http\Controllers\Auth\MyAccount\KyguiController::class, 'deleteimg'])->name('delete_img_kygui');
    Route::get('kygui/delete/{id}', [App\Http\Controllers\Auth\MyAccount\KyguiController::class, 'delete']);


    


});

Route::group(['prefix' => 'shop'],function(){ 
    Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);
    Route::get('/listproduct', [App\Http\Controllers\Front\ShopController::class, 'shopnow']);
    Route::get('/Category/{categoryname}', [App\Http\Controllers\Front\ShopController::class, 'category']);
    Route::get('/Brand/{brandname}', [App\Http\Controllers\Front\ShopController::class, 'brand']);
    Route::get('/Product/{id}', [App\Http\Controllers\Front\ShopController::class, 'show']);
    Route::post('/Product/{id}', [App\Http\Controllers\Front\ShopController::class, 'comment']);
});





Route::group(['prefix' => 'cart','middleware' => ['auth','role:user']],function(){ 
    Route::get('/add/{id}', [App\Http\Controllers\Front\CartController::class, 'add']);
    Route::post('/add/{id}', [App\Http\Controllers\Front\CartController::class, 'addqty']);
    Route::get('', [App\Http\Controllers\Front\CartController::class, 'index']);
    Route::get('delete/{rowId}', [App\Http\Controllers\Front\CartController::class, 'delete']);
    Route::get('update', [App\Http\Controllers\Front\CartController::class, 'update']);

    
});
Route::group(['prefix' => 'checkout','middleware' => ['auth','role:user']],function(){ 
    Route::get('/', [App\Http\Controllers\Front\CheckOutController::class, 'index']);
    Route::post('/', [App\Http\Controllers\Front\CheckOutController::class, 'addOder']);
    Route::get('/result', [App\Http\Controllers\Front\CheckOutController::class, 'result']);

});


Auth::routes();


//Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
Route::post('logout-user',[App\Http\Controllers\SessionsController::class, 'destroy']);
//Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');


Route::get('/redirect-google',[SocicalController::class,'redirectGoogle'])->name('redirectGoogle');
Route::get('/google_callback',[SocicalController::class,'googleCallback']);

Route::get('/redirect-facebook',[SocicalController::class,'redirectFacebook'])->name('redirectFacebook');
Route::get('/facebook_callback',[SocicalController::class,'facebookCallback']);


Route::get('/streaming', 'App\Http\Controllers\WebrtcStreamingController@index');
Route::get('/streaming/{streamId}', 'App\Http\Controllers\WebrtcStreamingController@consumer');
Route::post('/stream-offer', 'App\Http\Controllers\WebrtcStreamingController@makeStreamOffer');
Route::post('/stream-answer', 'App\Http\Controllers\WebrtcStreamingController@makeStreamAnswer');

/*Route::get('/', function () {
    return view('chatbot');
});*/
Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');
