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

Route::get('/', 'ProductController@index')->name('index');//in use
Route::post('/adduser', 'ProductController@AddUser')->name('adduser');//in use
Route::post('/addcomment/{id}', 'ProductController@AddComment');//in use
Route::get('/getuserpostcomment', 'ProductController@getPostByUser')->name('getuserpostcomment');

Route::get('/getcomment/{id}', 'ProductController@getCommentByPost');//in use
Route::get('/Show/{user}', 'ProductController@show');//in use

Route::get('/Signin', 'ProductController@SignIn')->name('Signin');// in use
Route::get('/Signup', 'ProductController@SignUp')->name('Signup'); //in use
Route::post('/addpost/{id}', 'ProductController@AddPost');//in use
Route::get('/auth', 'ProductController@authenticate')->name('auth');//in use
//Route::get('/admin', 'ProductController@Admin')->name('admin');
Route::get('/logout', 'ProductController@Logout')->name('logout');//in use


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


