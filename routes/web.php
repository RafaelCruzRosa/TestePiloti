<?php

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

Auth::routes();

    
Route::get('/home', [
     'uses' => 'HomeController@index',
     'as' => 'home'
]);

Route::get('/profile',[
    'uses' => 'HomeController@profile',
    'as' => 'profile'
]);

Route::post('/update/{id}',[
    'uses'=>"UserController@update",
    'as'=>'update'
]);




Route::get('admin/home',[
    'uses'=>'AdminController@index',
    "as"=>'admin.home'
]);

Route::get('admin/users',[
    'uses'=>'AdminController@show',
    'as'=>'admin.users'
]);

Route::get('/admin/users/edit/{id}',[
    'uses'=>'AdminController@edit',
    'as'=>'admin.edit'    
]);

Route::post('/admin/update/{id}',[
    'uses'=>'AdminController@update',
    'as'=>'admin.update'
]);

Route::get('/admin/users/delete/{id}',[
    'uses'=>'AdminController@destroy',
    'as'=>'admin.delete'
]);

Route::get('/admin/create',[
    'uses'=>'AdminController@create',
    'as'=>'admin.create'
]);

Route::post('/admin/store',[
    "uses"=>'AdminController@store',
    'as'=>'admin.store'
]);

Route::get('/admin/deletados',[
    'uses'=>'AdminController@usersDeleted',
    'as'=>'admin.deleted'
]);

Route::get('/admin/desfazer/{id}',[
    'uses'=>'AdminController@desfazer',
    'as'=>'admin.desfazer'
]);