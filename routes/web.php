<?php


Route::get('brand/{brand}', "ProductController@brand")->name('brand');

Route::get('category/{category?}', 'ProductController@category')->name('category');

Route::get('type/{type}', 'ProductController@type')->name('type');

Route::get('subtype/{subtype}', 'ProductController@subtype')->name('subtype');

Route::get('products', 'ProductController@index')->name('products.index');

Route::get('product/{product}', "ProductController@show")->name('product');

// live search module routes----------------------------------------
Route::get('productsdrop', 'ProductController@dropdown')->name('productsdrop');
Route::get('findproducts', 'ProductController@find')->name('findproducts');

// rest of the routes -----------------------------------------------------

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::get('search/{query?}', 'SearchController@getresults')->name('search');

Route::resource('cart', 'CartController');
Route::post('clean-cart', 'CartController@clean')->name('cart.clean');

Route::resource('order', 'OrderController');

Auth::routes(['verify' => true, 'register' => false]);

// Route::get('/user', 'HomeController@index')->name('userdashboard');

// jquery admin create product routes
Route::get('formsubtypes', [\App\Http\Controllers\FormsubtypesController::class, 'index'])
->name('formsubtypes.index');

Route::get('formtypes', [\App\Http\Controllers\FormtypesController::class, 'index'])
->name('formtypes.index');

// API ROUTES

Route::get('apicategories/', 'Api\CategoryController@index')->name('apicategories');
Route::get('apiproducts/', 'Api\ProductController@index')->name('apiproducts');
Route::get('apibrands/', 'Api\BrandController@index')->name('apibrands');
Route::get('apiprices/', 'Api\PriceController@index')->name('apiprices');
// Route::get('apiproducts',  'Api\ProductsController@index')->name('apiproducts');
// Route::get('apicategories', 'Api\CategoryController@index')->name('apicategories');
// Route::get('apibrands', 'Api\BrandController@index')->name('apibrands');

// pages routing...
Route::view('/', 'index')->name("index");
// Route::get('/', function(){
    // Response::macro('caps', function ($value) {
    //     return $value;//Response::make(strtoupper($value));
    // });
    // return response()->caps('nothing here');


// <!-- Output:
// i=0 i=1 i=2 i=3 i=4 i=5 i=6 i=7 i=8 i=9 i=10 -->


// })->name("index");

Route::get('whoweare', function () {
    return view('pages.whoweare');
});
Route::get('contact', function () {
    return view('pages.contact');
});

Route::post('contact', 'ContactController@postcontact')->name('postcontact');
