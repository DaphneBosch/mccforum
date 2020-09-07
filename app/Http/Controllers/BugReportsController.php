<?php

namespace App\Http\Controllers;

use App\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BugReportsController extends Controller
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
        $poster = DB::table('posters')->where('category', 'bugreports')->orderByDesc('id')->paginate(10);
        $posterrecent = Poster::orderBy('id', 'desc')->take(5)->get();

        return view('front.forum.bugreports.bugreports')->with('poster', $poster)->with('posterrecent', $posterrecent);
    }
}
