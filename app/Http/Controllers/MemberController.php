<?php

namespace App\Http\Controllers;

use App\Poster;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MemberController extends Model
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posterrecent = Poster::orderBy('id', 'desc')->take(5)->get();
        $users = DB::table('users')->orderbyDesc('id')->paginate(10);

        return view('front.members.members')->with('posterrecent', $posterrecent)->with('users', $users);
    }
}
