<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Poster extends Model
{
    protected $table = 'posters';

    protected $fillable = ['title', 'category', 'username', 'text'];

    protected $dates = ['created_at', 'updated_at'];

    public function store(Request $request)
    {
        Poster::create($request->all());
    }
}
