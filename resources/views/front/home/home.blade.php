@extends('layouts.layout')

@section('title', 'MCC Forum | Home')

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
            <div class="col-8">
                <div class="forumposts">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4>Server Posts</h4></div>

                        @foreach($serverpost as $server)
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4"><p class="card-text">{{ $server->title }}</p></div>
                                    <div class="col-7"><p class="card-text">{{ $server->text }}</p></div>
                                    <div class="col-1"><p class="card-text">{{ $server->username }}</p></div>
                                </div>
                                <hr>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-light mb-3 justify-content-center">
                    <div class="recentposts">
                        <div class="card-header"><h4>Recent posts</h4></div>
                        @foreach($posterrecent as $recent)
                            <div class="card-body">
                                <p class="card-text">{{$recent->title}}</p>
                                <p class="card-text">{{$recent->username}}</p>
                                <hr>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="forumposts">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4>NEWS</h4></div>

                        @foreach($newsflash as $news)
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4"><p class="card-text">{{ $news->title }}</p></div>
                                    <div class="col-7"><p class="card-text">{{ $news->text }}</p></div>
                                    <div class="col-1"><p class="card-text">{{ $news->username }}</p></div>
                                </div>
                                <hr>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card bg-light mb-3 justify-content-center">
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
                        <div class="card-body">
                            <p class="card-text">Registered users: {{$registeredusers}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
