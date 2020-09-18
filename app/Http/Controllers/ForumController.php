<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class ForumController extends Model
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
        $poster = Post::all()->take(5);
        $posterrecent = Post::orderBy('id', 'desc')->take(5)->get();

        return view('front.forum.forum')->with('poster', $poster)->with('posterrecent', $posterrecent);
    }
}
