<?php


use App\User;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;


Route::get('/products/{id}', 'ProductController@show');
Route::get('/home/{id}', 'ProductController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

/*
Route::get('/products', function () {
    return view('products');
});
*/
Route::get('product','Product@list');


Route::get('/user', function () {
    return new UserResource(User::find(1));
});;

Route::get('/users', function () {
    return new UserCollection(User::all());
});
