<?php
// administrator prefix in RouteServiceProvider

use Illuminate\Support\Facades\Artisan;

Route::prefix('backend')->middleware(['auth'])->group(function () {
      Route::get('/', 'Admin\HomeController@index')->name('manage');
    // Route::resource('adverts', 'Admin\AdvertController');
    Route::get('dashboard', 'Admin\HomeController@index')->name('dashboard');

    Route::resource('roles', 'Admin\RoleController');

    Route::resource('permissions', 'Admin\PermissionController');

    Route::resource('users', 'Admin\UserController');

    Route::resource('products', 'Admin\ProductController')->except('show');

    Route::get('products/{product}', 'Admin\ProductController@show')->name('products.show');


    Route::resource('variants', 'Admin\VariantController');

    Route::resource('categories', 'Admin\CategoryController');

    Route::resource('tags', 'Admin\TagController');

    Route::resource('types', 'Admin\TypeController');

    Route::resource('subtypes', 'Admin\SubTypeController');

    Route::resource('brands', 'Admin\BrandController');

    Route::resource('colors', 'Admin\ColorController'); //->only(['index','destroy']);

    Route::get('config/clear', function () {
        Artisan::call('config:clear');
        return Redirect::back();
    })->name("cache.clear");

    Route::get('config/clear', 'Admin\ConfigController@clear')
    ->name('config.clear');
    Route::get('cache/clear', 'Admin\CachingController@clear')
    ->name('cache.clear');

    // Route::get('images', 'Admin/ImageController@index');

    Route::post('upload', [\App\Http\Controllers\Admin\FilepondController::class, 'upload'])
        ->name('filepond');
    // Route::post('upload', [\Sopamo\LaravelFilepond\Http\Controllers\FilepondController::class,'upload'])->name('filepond');
    // Route::post('/delete/', [\Admin\Http\Controllers\Admin\FilepondController::class, 'revert'])
    //     ->name('revert');
    // Route::post('/process/', [\Admin\Http\Controllers\Admin\FilepondController::class, 'revert'])
    // ->name('process');
    // Route::get('/restore', [\Admin\Http\Controllers\Admin\FilepondController::class, 'upload'])
    // ->name('restore');
    // Route::get('/load', [\Admin\Http\Controllers\Admin\FilepondController::class,'revert'])
    // ->name('load');
    // Route::get('/fetch', [\Admin\Http\Controllers\Admin\FilepondController::class,'revert'])
    // ->name('fetch');


    //   Route::patch('categories/{category}', 'Admin\CategoryController@destroy')->name('categories.destroy');

    // partner routes
    // Route::get('my-company/{company}', 'Partner\CompanyController@show')->name('my.company.show');

    // Route::get('my-company/{company}/edit', 'Partner\CompanyController@edit')->name('my.company.edit');

    // Route::post('my-company/{company}', 'Partner\CompanyController@update')->name('my.company.update');

    // Route::get('my-product/create', 'Partner\ProductController@create')->name('my.products.create');

    // Route::get('my-product/{product}', 'Partner\ProductController@show')->name('my.products.show');

    // Route::get('my-product/{product}/edit', 'Partner\ProductController@edit')->name('my.products.edit');

    // Route::post('my-product/{product}', 'Partner\ProductController@update')->name('my.products.update');

    // Route::post('my-product', 'Partner\ProductController@store')->name('my.products.store');

    // Route::resource('my-brands', 'Partner\BrandController');

    // Route::resource('my-colors', 'Partner\ColorController');

    // ADMIN CACHE CLEAR ROUTES
    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        return "Artisan::call('cache:clear')";
    });

    Route::get('/clear-allcache', function () {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        return "Artisan::call('cache,view,route:clear')";
    });
});
