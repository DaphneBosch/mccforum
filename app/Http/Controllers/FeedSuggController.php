<?php

namespace App\Http\Controllers;

use App\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedSuggController extends Controller
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
        $poster = DB::select("select * from posters where category = 'feedsug'", [1]);

        return view('front.forum.feedsugg.feedsugg')->with('poster', $poster);
    }
}
