@extends('layouts.layout')

@section('title', 'MCC Forum | Forums')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="homecontent">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4 style="text-transform: uppercase">MineCrafterCity COMMUNITY</h4></div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/creations">Creations</a></p>
                            <img src="{{asset('/img/logos/image0.png')}}" style="max-width: 100px;">
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/events">Events</a></p>
                            <img src="{{asset('/img/logos/events.png')}}" style="max-width: 100px;">
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/introductions">Introductions</a></p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/feedback-suggestions">Feedback & Suggestions</a></p>
                            <img src="https://minecraftercity.com/images/logo.png" style="max-width: 100px">
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><a class="cool-link" href="/off-topic">Off-Topic</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card bg-light mb-3 justify-content-center">
                    <div class="recentposts">
                    <div class="card-header"><h4>Recent posts</h4></div>
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

        <div class="row">
            <div class="col-10">
                <div class="homecontent">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4 style="text-transform: uppercase">Server Issues</h4></div>
                        <div class="card-body">
                            <p class="card-text">Bug Reports</p>
                            <img src="{{asset('/img/logos/image0.png')}}" style="max-width: 100px;">
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Store Issues</p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Report Users</p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Appeals</p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Staff Reports</p>
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
                            <p class="card-text">Support Team</p>
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
