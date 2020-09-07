@extends('layouts.layout')

@section('title', 'MCC Forums | New Post')

@section('content')

    <div class="title-announce">
        <h1>Make a new post</h1>
    </div>

    <div class="container">

        <div class="makeposts">

            <form method="POST" action="/newpost/store">

                {{ csrf_field() }}

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

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
                        <option value="bugreports">Bug Reports</option>
                        <option value="storeissues">Store Issues</option>
                        <option value="reportusers">Report Users</option>
                        <option value="appeals">Appeals</option>
                        <option value="staffreports">Staff Reports</option>
                        <option value="supportteam">Support Team</option>
                        <option value="buildersteam">Builders Team</option>
                        <option value="adminsteam">Admins Team</option>
                    </select>

                </div>
                <div>
                    <label>Username</label>
                    <input type="text" name="username" value="{{ old('name', auth()->user()->name) }}">
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
