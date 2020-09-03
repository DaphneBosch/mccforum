<?php

namespace App\Http\Controllers;

use App\Poster;
use http\Client\Response;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
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
        $posterrecent = Poster::orderBy('id', 'desc')->take(5)->get();

        return view('front.home.home')->with('posterrecent', $posterrecent);
    }
}
