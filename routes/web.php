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
Route::post('/creations/{id}/store',['uses' => '\App\Http\Controllers\CommentController@store']);
Route::get('/introductions/{id}',['uses' => '\App\Http\Controllers\IntroController@getPost']);

Route::post('/creations/{id}/store', 'CommentController@store')->name('comment.add');
Route::post('/creations/{id}/reply/store', 'CommentController@replyStore')->name('reply.add');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/newpost/store', ['uses' => '\App\Http\Controllers\PostController@store']);
Route::get('/newpost', ['uses' => '\App\Http\Controllers\PostController@index']);
Route::get('/news', ['uses' => '\App\Http\Controllers\NewsController@index']);
Route::get('/help', ['uses' => '\App\Http\Controllers\HelpController@index']);
Route::get('/creations', ['uses' => '\App\Http\Controllers\CreationsController@index']);
Route::get('/events', ['uses' => '\App\Http\Controllers\EventsController@index']);
Route::get('/buildersteam', ['uses' => '\App\Http\Controllers\BuildersTeamController@index']);
Route::get('/adminsteam', ['uses' => '\App\Http\Controllers\AdminsTeamController@index']);
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

//Route::get('/{pageId}', function($pageId){
//    return view('page',['pageId' => $pageId]);
//});
//Route::get('comments/{pageId}', ['uses' => '\App\Http\Controllers\CommentController@index']);
//Route::post('comments', ['uses' => '\App\Http\Controllers\CommentController@store']);
//Route::post('comments/{commentId}/{type}', ['uses' => '\App\Http\Controllers\CommentController@update']);
