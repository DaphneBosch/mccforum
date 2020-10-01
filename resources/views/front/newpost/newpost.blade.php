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
                        @if($adminer->role == 'admin')
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
                            <option value="news">News</option>
                            <option value="server">Server</option>
                            <option value="events">Events</option>
                        @else
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
                        @endif
                    </select>

                </div>
                <div>
                    <label>Username</label>
                    <input type="text" name="username" value="{{ old('name', auth()->user()->name) }}" readonly>
                </div>

                <div>
                    <label>Your post</label>
                    <textarea id="mytextarea" name="text"></textarea>

                </div>
                <div>

{{--                    <div class="form-group row">--}}
{{--                        <label for="profile_image" class="col-md-4 col-form-label text-md-right">Upload an image</label>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <input id="upload_image" type="file" class="form-control" name="upload_inage">--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <button class="btn btn-danger" type="submit">Create post!</button>

                </div>

            </form>

        </div>
    </div>

    </div>
@endsection
