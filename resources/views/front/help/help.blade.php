@extends('layouts.layout')

@section('title', 'MCC Forum | News')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="homecontent">
                    <div class="card bg-light mb-3">
                        <div class="card-header"><h4>help</h4></div>
                        <div class="card-body">
                            <p class="card-title">How do i create a new post?</p>
                            <p class="card-text">
                                You can create a new post by using the big red button on the forum!
                            </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-title">How can i login/register?</p>
                            <p class="card-text">
                                You can register by using the links in the navigation on your left side.
                                The same goes for login.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card bg-light mb-3 justify-content-center">
                    <div class="recentposts">
                        <div class="card-header"><h4>Recent posts</h4></div>
                        @foreach($posterrecent as $recent)
                            <div class="card-body">
                                <p class="card-text">{{$recent->title}}</p>
                                <p class="card-text">{{$recent->category}}</p>
                                <p class="card-text">{{$recent->username}}</p>
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
