<?php

namespace App\Http\Controllers;

use App\Post;
use http\Client\Response;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posterrecent = Post::orderBy('id', 'desc')->take(5)->get();
        $newsflash = DB::table('posts')->where('category', 'news')->orderByDesc('id')->get()->take(10);
        $serverpost = DB::table('posts')->where('category', 'server')->orderByDesc('id')->get()->take(10);
        $registeredusers = DB::table('users')->count();


        return view('front.home.home')->with('posterrecent', $posterrecent)->with('newsflash', $newsflash)->with('serverpost', $serverpost)->with('registeredusers', $registeredusers);
    }
}
