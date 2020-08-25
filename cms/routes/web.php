<?php

use App\POST;

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
/*
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
*/

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

// read
Route::get('/read', function() {
    $posts = Post::all();
    
    foreach($posts as $post) {
        return $post->title;
    }
});

// find
Route::get('/find', function() {
    $post = Post::find(2);
    return $post->title;
});

// where
Route::get('/where', function() {
    $post = Post::where('id', 2) -> orderBy('id', 'desc') -> take(1) -> get();
    return $post;
});

// find or fail
Route::get('/find_or_fail', function() {
    $posts = Post::findOrFail(1);
    // $posts = Post::where('users_count', '<', 50) -> firstOrFail();
    return $posts;
});

// insert
Route::get('/insert', function() {
    $post = new Post;

    $post->title = 'HTML';
    $post->content = 'Hypertext Makup Language';

    $post->save();
});

// insert data by mass assignment
Route::get('/create', function() {
    Post::create(['title'=>'The create method', 'content'=>'I learning Laravel']);
});

// update by find
Route::get('/update_by_find', function() {
    $post = Post::find(4);

    $post->title = 'HTML updated';
    $post->content = 'Hypertext Makup Language updated';

    $post->save();
});

// update
Route::get('/update', function() {
    Post::where('id', 2) -> where('is_admin', 0) -> update(['title'=>'PHP advanced', 'content'=>'New Content']);
});
