<?php

namespace App\Http\Controllers;

use App\Poster;
use Illuminate\Http\Request;

class EventsController extends Controller
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

        return view('front.forum.events.events')->with('poster', $poster);
    }
}
