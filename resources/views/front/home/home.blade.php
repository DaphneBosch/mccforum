@extends('layouts.layout')

@section('title', 'MCC Forum | Home')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <div class="makepostbutton">
                    <a href="/newpost">
                        <input class="btn btn-danger" type="submit" value="Make Post" >
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="homecontent">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4>Server posts</h4></div>
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
            <div class="col-4">
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
            <div class="col-8">
                <div class="homecontent">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4>NEWS</h4></div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
