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

Route::get('/learn', 'PostController@blog')->name('blog');


// Route::post('/pay', 'PaymentController@drop')->name('pay');

Route::post('/pay', [
    'uses' => 'PaymentController@redirectToGateway',
    'as' => 'pay'
]);


Route::get('/terms', function () {
    return view('term');
});

Route::get('/login', 'PostController@login')->name('login');

Route::post('/login', 'PostController@authenticate');

Route::get('/test', function(){
    return view('test');
});

Route::post('post', 'PostController@store');

Route::get('learn/{post}', 'PostController@show');

Route::get('training', 'PostController@training');

Route::group(['middleware' => ['auth']], function () {
    Route::get('learn/edit_post/{post}/delete', 'PostController@destroy');
    Route::get('learn/edit_post/{post}', 'PostController@edit');
    Route::get('create', 'PostController@create');
    Route::post('learn/edit_post/{post}', 'PostController@update');
    Route::get('/logout', 'PostController@logout');
});
