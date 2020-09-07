<?php

namespace App\Http\Controllers;

use App\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IntroController extends Controller
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
        $poster = DB::table('posters')->where('category', 'introductions')->orderByDesc('id')->paginate(10);
        $posterrecent = Poster::orderBy('id', 'desc')->take(5)->get();

        return view('front.forum.introductions.introductions')->with('poster', $poster)->with('posterrecent', $posterrecent);
    }

    public function getPost(Request $request) {

        $request->id;
        $getPost = Poster::find($request->id);

        return view('front.forum.introductions.introdetail')->with('getPost', $getPost);
    }
}
