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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return 'About';
// });

// Route::get('/contact', function () {
//     return 'Contact';
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return 'This value on URL ' . $id . ' and ' . $name;
// });

// // Naming Routes
// Route::get('/admin/posts/example', array('as'=>'admin.home', function() {
//     $url = route('admin.home'); 
//     return 'This URL is ' . $url;
// })); 

// routing controller
// Route::get('/post/{id}', 'PostsController@index');

// Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');

Route::get('/post/{id}/{name}/{password}', 'PostsController@show_view');