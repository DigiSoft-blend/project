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
Route::get('/addlike/{id}', 'ProductController@AddLike');//in use
Route::post('/adduser', 'ProductController@AddUser')->name('adduser');//in use

//Route::post('/addp', 'ProductController@addp')->name('addp');//in use

Route::post('/addcomment/{id}', 'ProductController@AddComment');//in use
Route::get('/userpost/{id}', 'ProductController@UserPost');//in use
Route::get('/getuserpostcomment', 'ProductController@getPostByUser')->name('getuserpostcomment');
Route::post('/updatepost/{id}', 'ProductController@UpdatePost');//in use
Route::post('/updateuser/{id}', 'ProductController@UpdateUser');//in use
Route::get('/editpost/{id}', 'ProductController@EditPost');//in use
Route::get('/deletpost/{id}', 'ProductController@DeletPost');//in use
Route::get('/editcomment/{id}', 'ProductController@EditComment');//in use
Route::get('/deletcomment/{id}', 'ProductController@DeletComment');//in use
Route::post('/updatecomment/{id}', 'ProductController@UpdateComment');//in use
Route::get('/getcomment/{id}', 'ProductController@getCommentByPost');//in use
Route::get('/Show/{user}', 'ProductController@show');//in use
Route::get('/continue-reading/{id}', 'ProductController@Continue_reading')->name('continue-reading');//in use
Route::get('/Signin', 'ProductController@SignIn')->name('Signin');// in use
Route::get('/Signup', 'ProductController@SignUp')->name('Signup'); //in use
Route::get('/edituserprofile', 'ProductController@EditUser')->name('edituserprofile');// in use
Route::post('/addpost', 'ProductController@AddPost')->name('addpost');//in use
Route::get('/auth', 'ProductController@authenticate')->name('auth');//in use
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


