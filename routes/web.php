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
    return redirect('welcome');
});
Route::get('welcome', function () {
    return view('index');
});

Route::get('test', 'CategoryController@index');

Route::get('users', 'UserController@index');
Route::get('users/login', 'UserController@loginPage');
Route::post('users/login', 'UserController@login');
Route::get('users/logout', 'UserController@logout');
Route::get('users/register', 'UserController@register');
Route::post('users/register', 'UserController@store');
Route::put('users/{username}', 'UserController@profileUpdate');
Route::get('users/{username}', 'UserController@profileShow');
Route::get('users/{username}/edit', 'UserController@profileEdit');

Route::get('items/{username}/create', 'ItemController@create');
Route::post('items/{username}', 'ItemController@store');
Route::get('items/{username}/{itemname}/edit', 'ItemController@edit');
Route::put('items/{username}/{itemname}', 'ItemController@update');
Route::get('items/{username}/{itemname}/delete', 'ItemController@delete');
Route::delete('items/{username}/{itemname}', 'ItemController@destroy');
Route::get('items/{username}', 'ItemController@index');
Route::get('items/{username}/{itemname}', 'ItemController@show');

Route::get('category', 'CategoryController@index');
Route::get('category/{categoryName}', 'CategoryController@show');
Route::get('category/{categoryName}/{subCategoryName}', 'CategoryController@show');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');