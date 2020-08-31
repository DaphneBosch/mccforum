@extends('layouts.layout')

@section('title', 'MCC Forums | New Post')

@section('content')

    <div class="title-announce">
        <h1>Make a new post</h1>
    </div>

    <div class="container">

        <div class="makeposts">

            <form method="POST" action="/home/mededelingen/storeAnnouncement">

                {{ csrf_field() }}

                <div>
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Title">

                </div>
                <div>
                    <label>Category</label>
                    <select id="category" name="category">
                        <option value="creations">Creations</option>
                        <option value="introductions">Introductions</option>
                        <option value="feedsug">Feedback & Suggestions</option>
                        <option value="offtopic">Off-Topic</option>
                    </select>

                </div>
                <div>
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Username">

                </div>

                <div>
                    <label>Your post</label>
                    <textarea name="text"></textarea>

                </div>
                <div>

                    <button class="btn btn-danger" type="submit">Create post!</button>

                </div>

            </form>

        </div>
    </div>

    </div>
@endsection
