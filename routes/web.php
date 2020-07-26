<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// 测试
Route::group(['prefix' => '/test', 'as' => 'test.'], function () {
    Route::get('/request', 'TestController@requestTest')->name('request');
    Route::middleware('cache.headers:public;max_age=2628000;etag')->get('/test', function () {
        return response('hello world')
            ->withHeaders([
                'Content-Type' => 'image/jpg',//设置响应头
                'X-Header-One' => 'Header Value',
            ])->cookie('name', 'value', 1);//添加cookie
    });
    Route::get('directTest', function () {
        return redirect('/test/request');
    });
    Route::get('view', function(){
        return response()
            ->view('hello', ['data' => 'hello world'], 200)
            ->header('Content-Type', 'text/html');
    });
    Route::get('json',function(){
        return response()->json([
            'a' => 'hello',
            'b' => 'world'
        ]);
    });
});
