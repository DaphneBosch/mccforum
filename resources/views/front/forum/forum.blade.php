@extends('layouts.layout')

@section('title', 'MCC Forum | Forums')

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
                        <div class="card-header"><h4 style="text-transform: uppercase">MineCrafterCity COMMUNITY</h4></div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/creations">Creations</a></p>
                            <img src="{{asset('/img/logos/creations.png')}}" style="max-width: 100px;">
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/events">Events</a></p>
                            <img src="{{asset('/img/logos/events.png')}}" style="max-width: 100px;">
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/introductions">Introductions</a></p>
                            <img src="{{asset('/img/logos/introductions.png')}}" style="max-width: 100px;">
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/feedback-suggestions">Feedback & Suggestions</a></p>
                            <img src="{{asset('/img/logos/feedsug.png')}}" style="max-width: 100px">
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/off-topic">Off-Topic</a></p>
                            <img src="{{asset('/img/logos/offtopic.png')}}" style="max-width: 100px;">
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
                                <p class="card-text">{{$recent->username}}</p>
                                <hr>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-10">
                <div class="homecontent">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4 style="text-transform: uppercase">Server Issues</h4></div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/bugreports">Bug Reports</a></p>
                            <img src="{{asset('/img/logos/image0.png')}}" style="max-width: 100px;">
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/storeissues">Store Issues</a></p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/reportusers">Report Users</a></p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/appeals">Appeals</a></p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/staffreports">Staff Reports</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card bg-light mb-3 justify-content-center">
                    <div class="recentposts">
                        <div class="card-header"><h4>Online staff</h4></div>
                        <div class="card-body">
                            <p class="card-text">Member 1 </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Member 2 </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Member 3 </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Member 4 </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Total online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <div class="homecontent">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4 style="text-transform: uppercase">Join MCC Staff</h4></div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/supportteam">Support Team</a></p>
                            <img src="{{asset('/img/logos/image0.png')}}" style="max-width: 100px;">
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Builders Team</p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Admins Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
