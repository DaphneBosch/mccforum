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
        $poster = DB::select("select * from posters where category = 'introductions'", [1]);


        return view('front.forum.introductions.introductions')->with('poster', $poster);
    }

    public function getPost(Request $request) {

        $request->id;
        $getPost = Poster::find($request->id);

        return view('front.forum.introductions.introdetail')->with('getPost', $getPost);
    }
}
