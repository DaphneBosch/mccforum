<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupportTeamController extends Controller
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
        $poster = DB::table('posts')->where('category', 'supportteam')->orderByDesc('id')->paginate(10);
        $posterrecent = Post::orderBy('id', 'desc')->take(5)->get();
        $registeredusers = DB::table('users')->count();

        return view('front.forum.supportteam.supportteam')->with('poster', $poster)->with('posterrecent', $posterrecent)->with(
            'registeredusers', $registeredusers
        );
    }
}
