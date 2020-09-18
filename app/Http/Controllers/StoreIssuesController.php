<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreIssuesController extends Controller
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
        $poster = DB::table('posts')->where('category', 'storeissues')->orderByDesc('id')->paginate(10);
        $posterrecent = Post::orderBy('id', 'desc')->take(5)->get();
        $registeredusers = DB::table('users')->count();

        return view('front.forum.storeissues.storeissues')->with('poster', $poster)->with('posterrecent', $posterrecent)->with(
            'registeredusers', $registeredusers
        );
    }
}
