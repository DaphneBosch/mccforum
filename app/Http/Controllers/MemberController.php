<?php

namespace App\Http\Controllers;

use App\Post;
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
        $posterrecent = Post::orderBy('id', 'desc')->take(5)->get();
        $users = DB::table('users')->orderbyDesc('id')->paginate(10);
        $registeredusers = DB::table('users')->count();

        return view('front.members.members')->with('posterrecent', $posterrecent)->with('users', $users)->with(
            'registeredusers', $registeredusers);
    }
}
