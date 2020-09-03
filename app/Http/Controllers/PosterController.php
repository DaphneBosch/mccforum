<?php

namespace App\Http\Controllers;

use App\Poster;
use Illuminate\Database\Eloquent\Model;

class PosterController extends Model
{
    public function index(){

        $poster = Poster::all();

        return view('front.forum.creations.creations',compact('poster'));
    }
    public function storePost(){

        $poster = new Poster();

        $poster->title = request('title');
        $poster->category = request('category');
        $poster->username = request('username');
        $poster->text = request('text');

        $poster->save();

        return redirect('/');

    }

}
