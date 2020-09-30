<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $adminer = Auth::user();
        return view('front.newpost.newpost')->with('adminer', $adminer);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3',
        ]);

        if ($validator->fails()) {

            return redirect('front.newpost.newpost')
                ->withErrors($validator)
                ->withInput();
        }

        $post = new Post();

        $post->title = request('title');
        $post->category = request('category');
        $post->username = request('username');
        $post->text = request('text');
        $post->user_id=auth()->id();

        $post->save();

        return redirect()->back()->with(['status' => 'Post created!']);

    }

//    public function storePost(){
//
//        function imageUploadPost()
//        {
//            request()->validate([
//                'upload_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            ]);
//
//            $imageName = time().'.'.request()->image->getClientOriginalExtension();
//            request()->image->move(public_path('/uploads/images/'), $imageName);
//        }
//    }

}
