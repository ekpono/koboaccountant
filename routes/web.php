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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});
Route::get('/newblog', 'PostController@newblog');
Route::get('/blog', 'PostController@blog')->name('blog');

Route::get('/term', function () {
    return view('term');
});


// Route::post('/pay', 'PaymentController@drop')->name('pay');

Route::post('/pay', [
    'uses' => 'PaymentController@redirectToGateway',
    'as' => 'pay'
]);

Route::get('/login', 'PostController@login')->name('login');

Route::post('/login', 'PostController@authenticate');




Route::post('post', 'PostController@store');

Route::get('blog/{post}', 'PostController@show');


Route::group(['middleware' => ['auth']], function () {
    Route::get('blog/edit_post/{post}/delete', 'PostController@destroy');
    Route::get('blog/edit_post/{post}', 'PostController@edit');
    Route::get('create', 'PostController@create');
    Route::post('blog/edit_post/{post}', 'PostController@update');
    Route::get('/logout', 'PostController@logout');
});
