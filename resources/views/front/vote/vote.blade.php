@extends('layouts.layout')

@section('title', 'MCC Forum | Vote')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="votes">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4>Vote for MinecrafterCity</h4></div>
                        <div class="card-body">
                            <p class="card-text">
                                You can vote for MineCrafterCity by clicking the links below.
                                Voting will give you points in the server, you can buy things with in
                                Factions. The other two servers, Survival and Creative, will be added
                                later, so you can use the points server wide!

                                For every vote you do, you can get 100 points.
                                <br>
                                <img src="https://minecraftercity.com/images/logo.png">
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="votes">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4>Voting Links</h4></div>
                        <div class="card-body">
                            <p class="card-text">
                                <a class="cool-link" href="https://www.serverpact.com/vote-43600">serverpact.com</a>
                            </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <a class="cool-link" href="https://www.planetminecraft.com/server/minecraftercity---deticated-247-survival-events-economic">planetminecraft.com</a>
                            </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <a class="cool-link" href="https://minecraftservers.org/vote/582043">minecraftservers.org</a>
                            </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <a class="cool-link" href="https://minecraft-server-list.com/server/458658/vote/">minecraft-server-list.com</a>
                            </p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <a class="cool-link" href="https://minecraft-mp.com/server/254619/vote/">minecraft-mp.com</a>
                            </p>
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
    </div>

@endsection
