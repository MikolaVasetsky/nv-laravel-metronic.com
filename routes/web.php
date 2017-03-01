<?php


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', 'AuthController@index')->name('loginPage');
Route::post('/login', 'AuthController@store')->name('login');
Route::post('/register', 'AuthController@register')->name('register');

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
	Route::get('/', function () {
	    return view('admin.index');
	})->name('admin');

	Route::get('/users', 'Admin\UsersController@index')->name('admin.users');
	Route::post('/users/list', 'Admin\UsersController@list');
	Route::get('/user/{id}', 'Admin\UsersController@edit')->name('admin.user.edit');

	Route::get('posts', 'Admin\PostController@index')->name('admin.posts');
	Route::get('posts/create', 'Admin\PostController@create')->name('admin.posts.create');
	Route::post('posts/store', 'Admin\PostController@store')->name('admin.posts.store');
});