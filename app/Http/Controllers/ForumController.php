<?php

namespace App\Http\Controllers;

use App\Poster;
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
        $poster = Poster::all()->take(5);
        $posterrecent = Poster::orderBy('id', 'desc')->take(5)->get();

        return view('front.forum.forum')->with('poster', $poster)->with('posterrecent', $posterrecent);
    }
}
