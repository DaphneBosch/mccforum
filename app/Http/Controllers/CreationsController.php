<?php

namespace App\Http\Controllers;

use App\Poster;
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
        $poster = DB::select("select * from posters where category = 'creations'", [1]);

        return view('front.forum.creations.creations')->with('poster', $poster);
    }

    public function getPost(Request $request) {

        $request->id;
        $getPost = Poster::find($request->id);

        return view('front.forum.creations.creationsdetail')->with('getPost', $getPost);
    }
}
