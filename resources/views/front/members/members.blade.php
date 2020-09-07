@extends('layouts.layout')

@section('title', 'MCC Forum | Members')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="memberlist">
                    <div class="card bg-light mb-3 justify-content-center">
                        <div class="card-header"><h4>Members of Minecraftercity</h4></div>
                        @foreach($users as $user)
                            <div class="card-body">
                                <p class="card-text"><img src="{!! $user->profile_image !!}" style="max-width: 100px; border-radius: 10%;">{{$user->name}}</p>
                                <hr>
                            </div>
                            @endforeach
                        {{ $users->render() }}
                        </div>
                    <hr>
                </div>
            </div>
            <div class="col-4">
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
    </div>

@endsection
