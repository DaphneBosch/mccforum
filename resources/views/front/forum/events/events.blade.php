@extends('layouts.layout')

@section('title', 'MCC Forum | Events')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                @guest
                    <div class="makepostbutton">
                        <a href="/login">
                            <input class="btn btn-danger" type="submit" value="Login to create a post!">
                        </a>
                    </div>
                @else
                    <div class="makepostbutton">
                        <a href="/newpost">
                            <input class="btn btn-danger" type="submit" value="Make Post">
                        </a>
                    </div>

                @endguest
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <div class="homecontent">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4>Events</h4></div>
                        <div class="card-body">
                            <p class="card-text">Post 1</p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Post 2</p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Post 3</p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Post 4</p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Post 5</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card bg-light mb-3 justify-content-center">
                    <div class="recentposts">
                        <div class="card-header"><h4>Recent posts</h4></div>
                        @foreach($poster as $posts)
                            <div class="card-body">
                                <p class="card-text">{{$posts->title}}</p>
                                <p class="card-text">{{$posts->username}}</p>
                                <hr>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-2">
                <div class="card bg-light mb-3 justify-content-right">
                    <div class="recentposts">
                        <div class="card-header"><h4>Online Staff</h4></div>
                        <div class="card-body">
                            <p class="card-text">Post 1 </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Post 2 </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Post 3 </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Post 4 </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Post 5 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
