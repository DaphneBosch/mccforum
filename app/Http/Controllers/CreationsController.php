<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreationsController extends Controller
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
//        $poster = DB::select("SELECT * FROM posters WHERE category = 'creations' ORDER BY 'id' DESC");

        $poster = DB::table('posts')->where('category', 'creations')->orderByDesc('id')->paginate(10);
        $posterrecent = Post::orderBy('id', 'desc')->take(5)->get();
        $registeredusers = DB::table('users')->count();

        return view('front.forum.creations.creations')->with('poster', $poster)->with('posterrecent', $posterrecent)->with(
            'registeredusers', $registeredusers
        );
    }

    public function getPost(Request $request) {

        $request->id;
        $getPost = Post::find($request->id);
        $comments = Comment::paginate(10);

        return view('front.forum.creations.creationsdetail')->with('getPost', $getPost)->with('comments', $comments);
    }
}
