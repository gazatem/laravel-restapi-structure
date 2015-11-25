<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Attribute;

Route::get('/debug', function () {
    return Attribute::all()->random(1);
});


Route::get('/', function () {
    return view('welcome');
});


$api = app('Dingo\Api\Routing\Router');



$api->version('v1', function ($api) {

    $api->post('auth/login', '\App\Http\Controllers\AuthenticateController@authenticate');

    $api->get('me', '\App\Http\Controllers\HelloController@getProfile');

    $api->group(['middleware' => ['jwt.auth']], function ($api) {
        $api->get('hello', '\App\Http\Controllers\HelloController@show');
    });


    $api->group([], function ($api) {
        $api->get('products', '\App\Http\Controllers\ProductController@index');
    });


/*    Route::post('login', 'Api\AuthController@login');

    Route::group(['middleware' => ['jwt.auth', 'jwt.refresh']], function() {
        Route::post('logout', 'Api\AuthController@logout');

        Route::get('test', function(){
            return response()->json(['foo'=>'bar']);
        });
    });*/

});


