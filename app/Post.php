<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'category', 'username', 'user_id', 'text'];

    protected $dates = ['created_at', 'updated_at'];

    public function store(Request $request)
    {
        Post::create($request->all());
    }

    public function getImageAttribute()
    {
        return $this->profile_image;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
