<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get(
    '/',
    array(
        'as' => 'home',
        'before' => 'province',
        'uses' => 'HomeController@index'
    )
);

Route::get(
    'pricereport/{hash}',
    array(
        'as' => 'pricereport.show',
        'before' => 'province',
        'uses' => 'PriceReportController@show'
    )
);

Route::post(
    'pricereport/store',
    array(
        'as' => 'pricereport.store',
        'before' => 'province',
        'uses' => 'PriceReportController@store'
    )
);

Route::get(
    'about',
    array(
        'as' => 'about',
        'uses' => 'StaticController@about'
    )
);

// Route::get(
//     'terms',
//     array(
//         'as' => 'terms',
//         'uses' => 'StaticController@terms'
//     )
// );

// Route::get(
//     'privacy',
//     array(
//         'as' => 'privacy',
//         'uses' => 'StaticController@privacy'
//     )
// );

// Route::get(
//     'lists',
//     array(
//         'as' => 'lists.index',
//         'uses' => 'ListController@index'
//     )
// );

// Route::get(
//     'lists/{id}',
//     array(
//         'as' => 'lists.show',
//         'uses' => 'ListController@show'
//     )
// );

// Route::get(
//     'seeder',
//     array(
//         'as' => 'seeder',
//         'uses' => 'StaticController@seeder'
//     )
// );

Route::get(
    'products',
    array(
        'as' => 'products.index',
        'uses' => 'ProductController@index'
    )
);

Route::get(
    'products/{hash}',
    array(
        'as' => 'products.show',
        'uses' => 'ProductController@show'
    )
);

// Route::get('test', function () {
//     // ProductList::with('products')->find(1)->toArray();
//     // return DB::getQueryLog();
// });

Route::get(
    'auth/login',
    array(
        'as' => 'auth.login.get',
        'uses' => 'AuthController@getLogin'
    )
);

Route::post(
    'auth/login',
    array(
        'as' => 'auth.login.post',
        'before' => 'crsf',
        'uses' => 'AuthController@postLogin'
    )
);

Route::get(
    'auth/logout',
    array(
        'as' => 'auth.logout.get',
        'uses' => 'AuthController@getLogout'
    )
);

Route::get(
    'provinces',
    array(
        'as' => 'provinces.index',
        'uses' => 'ProvincesController@index'
    )
);

Route::get(
    'provinces/{id}',
    array(
        'as' => 'provinces.set',
        'uses' => 'ProvincesController@set'
    )
);
