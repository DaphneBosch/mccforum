<?php

use Illuminate\Http\File;
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
Route::get('/creations/{id}',['uses' => '\App\Http\Controllers\CreationsController@getPost']);
Route::get('/introductions/{id}',['uses' => '\App\Http\Controllers\IntroController@getPost']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/newpost/store', ['uses' => '\App\Http\Controllers\PosterController@storePost']);
Route::get('/creations', ['uses' => '\App\Http\Controllers\CreationsController@index']);
Route::get('/events', ['uses' => '\App\Http\Controllers\EventsController@index']);
Route::get('/bugreports', ['uses' => '\App\Http\Controllers\BugReportsController@index']);
Route::get('/storeissues', ['uses' => '\App\Http\Controllers\StoreIssuesController@index']);
Route::get('/reportusers', ['uses' => '\App\Http\Controllers\ReportUserController@index']);
Route::get('/appeals', ['uses' => '\App\Http\Controllers\AppealsController@index']);
Route::get('/staffreports', ['uses' => '\App\Http\Controllers\StaffReportsController@index']);
Route::get('/supportteam', ['uses' => '\App\Http\Controllers\SupportTeamController@index']);
Route::get('/feedback-suggestions', ['uses' => '\App\Http\Controllers\FeedSuggController@index']);
Route::get('/off-topic', ['uses' => '\App\Http\Controllers\OfftopicController@index']);
Route::get('/members', ['uses' => '\App\Http\Controllers\MemberController@index']);
Route::get('/introductions', ['uses' => '\App\Http\Controllers\IntroController@index']);
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');

Route::get('/admin', function () {
    return view('back.adminlogin.adminlogin');
});

Route::get('/forums', ['uses' => '\App\Http\Controllers\ForumController@index']);

Route::get('/vote', function () {
    return view('front.vote.vote');
});

Route::get('/newpost', function () {
    return view('front.newpost.newpost');
});
