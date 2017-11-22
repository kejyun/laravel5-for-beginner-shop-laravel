<?php
// 檔案位置：routes/web.php
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
        // Facebook 登入
        Route::get('/facebook-sign-in', 'UserAuthController@facebookSignInProcess');
        // Facebook 登入重新導向授權資料處理
        Route::get('/facebook-sign-in-callback', 'UserAuthController@facebookSignInCallbackProcess');
    });
});

// 商品
Route::group(['prefix' => 'merchandise'], function(){
    Route::get('/', 'MerchandiseController@merchandiseListPage');
    
    Route::get('/create', 'MerchandiseController@merchandiseCreateProcess')
        ->middleware(['user.auth.admin']);
    Route::get('/manage', 'MerchandiseController@merchandiseManageListPage')
        ->middleware(['user.auth.admin']);
    
    // 指定商品
    Route::group(['prefix' => '{merchandise_id}'], function(){
        Route::get('/', 'MerchandiseController@merchandiseItemPage')
            ->where([
                'merchandise_id' => '[0-9]+',
            ]);
        
        Route::group(['middleware' => ['user.auth.admin']], function(){
            Route::get('/edit', 'MerchandiseController@merchandiseItemEditPage');
            Route::put('/', 'MerchandiseController@merchandiseItemUpdateProcess');
        });
        
        Route::post('/buy', 'MerchandiseController@merchandiseItemBuyProcess')
            ->middleware(['user.auth']);
    });
});

// 交易
Route::get('/transaction', 'TransactionController@transactionListPage')
    ->middleware(['user.auth']);