<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::any('/','LoginController');
Route::any('/adminuser','AdminuserController@index');
Route::any('/user','UserController@index');
Route::any('/upscore','UserController@upscore');
Route::any('/orderdel','OrderController@orderdel');
Route::any('/uporder','OrderController@uporder');
Route::any('/order_sou','OrderController@order_sou');
Route::any('/order','OrderController@order_list');
Route::any('/type','GoodsController@type');
Route::any('/addtypeok','GoodsController@addtypeok');
Route::any('/addtype','GoodsController@addtype');
Route::any('/index','IndexController@index');
Route::any('/login','LoginController@index');
Route::any('/goods_list','GoodsController@index');
Route::any('/goodsdel','GoodsController@goodsdel');
Route::any('/addproduct','GoodsController@addproduct');
Route::any('/addproductok','GoodsController@addproductok');
Route::any('/gaddsku','GoodsController@gaddsku');
Route::any('/gaddskuok','GoodsController@gaddskuok');
//Route::any('/', 'FenController@index');
Route::any('/deng','LoginController@deng');
Route::controller('/', 'LoginController');
Route::controller('fen', 'FenController');
Route::any('logout', 'LoginController@logout');
//Route::controller('goods', 'GoodsController');
//adminuser管理


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::group(['middleware' => ['web']], function () {
//    //
//});
