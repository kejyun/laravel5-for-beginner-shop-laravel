<?php
// routes/web.php
// 首頁
Route::get('/', 'MerchandiseController@indexPage');

// 使用者
Route::group(['prefix' => 'user'], function(){
    // 使用者驗證
    Route::group(['prefix' => 'auth'], function(){
        Route::get('/sign-up', 'UserAuthController@signUpPage');
        Route::post('/sign-up', 'UserAuthController@signUpProcess');
        Route::get('/sign-in', 'UserAuthController@signInPage');
        Route::post('/sign-in', 'UserAuthController@signInProcess');
        Route::get('/sign-out', 'UserAuthController@signOut');
    });
});

// 商品
Route::group(['prefix' => 'merchandise'], function(){
    Route::get('/', 'MerchandiseController@merchandiseListPage');
    Route::get('/create', 'MerchandiseController@merchandiseCreatePage');
    Route::post('', 'MerchandiseController@merchandiseCreateProcess');
    
    // 指定商品
    Route::group(['prefix' => '{merchandise_id}'], function(){
        Route::get('/', 'MerchandiseController@merchandiseItemPage');
        Route::get('/edit', 'MerchandiseController@merchandiseItemEditPage');
        Route::put('/', 'MerchandiseController@merchandiseItemUpdateProcess');
        Route::post('/buy', 'MerchandiseController@merchandiseItemBuyProcess');
    });
});

// 交易
Route::get('/transaction', 'TransactionController@transactionListPage');