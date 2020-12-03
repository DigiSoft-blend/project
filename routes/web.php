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

Route::get('/', 'ProductController@index')->name('home');
Route::get('/addpost', 'ProductController@AddPost')->name('addpost');
Route::get('/addcomment', 'ProductController@AddComment')->name('addcomment');
// Route::get('/blog', 'ProductController@Blog');
Route::get('/auth', 'ProductController@authenticate')->name('auth');
Route::get('/admin', 'ProductController@Admin')->name('admin');
// Route::post('/updatecoverpage', 'ProductController@UpdateCoverPage')->name('updatecoverpage');
// Route::get('/deletcoverpageimg/{id}', 'ProductController@DeletCoverPageImg');
// Route::post('/updatecollections', 'ProductController@UpdateCollections')->name('updatecollections');
// Route::get('/deletcollection/{id}', 'ProductController@DeletCollection');
// Route::post('/updatecostomerservices', 'ProductController@UpdateCostomerServices')->name('updatecostomerservices');
// Route::get('/deletcostomerservice/{id}', 'ProductController@DeletCostomerServices');
// Route::get('/logout', 'ProductController@Logout')->name('logout');
// Route::post('/send-mail', 'EmailController@SendMail')->name('send-mail');



// Route::get('/add-post', 'PostController@addPost');
// Route::get('/add-comment/{id}', 'PostController@addComment');
// Route::get('/get-comments/{id}', 'PostController@getCommentByPost');


