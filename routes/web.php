<?php

Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products', 'ProductsController@index')->name('products.index');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');

    // 开始
    Route::group(['middleware' => 'email_verified'], function() {
        //收货地址管理
        Route::resource('user_addresses','UserAddressesController');
        //我的收藏
        Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');

        //收藏与取消
        Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
        Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
        //购物车
        Route::get('cart', 'CartController@index')->name('cart.index');
        Route::post('cart', 'CartController@add')->name('cart.add');
        Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
        //订单
        Route::get('orders', 'OrdersController@index')->name('orders.index');
        Route::post('orders', 'OrdersController@store')->name('orders.store');

    });
});

Route::get('products/{product}', 'ProductsController@show')->name('products.show');



