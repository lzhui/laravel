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

Route::get('/', function () {
    return 'Hello World';
});



Route::post('foo/bar', function () {
    return 'Hello World';
});

Route::put('foo/bar', function () {
    //
});

Route::delete('foo/bar', function () {
    //
});

Route::get('ID/{id}',function($id){
    echo 'ID: '.$id;
});


Route::get('/user/{name?}',function($name = 'Virat'){
    echo "Name: ".$name;
});


Route::get('role',[
    'middleware' => 'Role:editor2',
    'uses' => 'TestController@index',
]);


Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);


Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
]);


Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
]);



