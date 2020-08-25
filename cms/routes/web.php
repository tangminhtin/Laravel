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

// Route::get('/contact', 'PostsController@contact');

// Route::get('/post/{id}/{name}/{password}', 'PostsController@show_view');

/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
*/

// insert
Route::get('/insert', function() {
    DB::insert('INSERT INTO posts(title, content) VALUES(?, ?)', ['PHP with laravel', 'Laravel is the best thing that has happened to PHP']);
});

// read
Route::get('/read', function() {
    $results = DB::select('SELECT * FROM posts WHERE id=?', [1]);
    
    // foreach($results as $post) {
    //     return $post->title;
    // }
    return var_dump($results);
});

// update
Route::get('/update', function() {
    $updated = DB::update('UPDATE posts SET title=? WHERE id=?', ['Updated title', 1]);
    return $updated;
});

// delete
Route::get('/delete', function() {
    $deleted = DB::delete('DELETE FROM posts WHERE id=?', [1]);
    return $deleted;
});
