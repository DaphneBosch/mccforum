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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/members', function () {
    return view('front.members.members');
});

Route::get('/forums', function () {
    return view('front.forum.forum');
});

Route::get('/vote', function () {
    return view('front.vote.vote');
});

Route::get('/creations', function () {
    return view('front.forum.creations.creations');
});

Route::get('/events', function () {
    return view('front.forum.events.events');
});

Route::get('/introductions', function () {
    return view('front.forum.introductions.introductions');
});

Route::get('/feedback-suggestions', function () {
    return view('front.forum.feedsugg.feedsugg');
});

Route::get('/off-topic', function () {
    return view('front.forum.offtopic.offtopic');
});

Route::get('/newpost', function () {
    return view('front.newpost.newpost');
});
