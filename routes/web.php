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

Route::get('/', 'Pagecontroller@index');

Route::get('/category', 'Pagecontroller@category');

Route::get('/archive', 'Pagecontroller@archive');

Route::get('/elements', 'Pagecontroller@elements');

Route::get('/blog', 'Pagecontroller@blog');

Route::get('/contact', 'Pagecontroller@contact')->middleware('age');

Route::get('/admin', 'Pagecontroller@admin');

Route::post('/admin/add/post', 'PostController@store')->name('admin.post.store');

Route::get('/post/{id}', 'PostController@single')->name('post.single');

Route::post('/admin/delete/post', 'PostController@delete')->name('admin.post.delete');

Route::get('/edit/{id}', 'PostController@edit');

Route::post('/update/{id}', 'PostController@update')->name('admin.post.update');

Auth::routes();

Route::get('/home', 'Pagecontroller@index')->name('home');
