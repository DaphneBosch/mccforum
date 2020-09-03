@extends('layouts.layout')

@section('title', 'MCC Forum | Introductions')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="homecontent">
                    <div class="card bg-light mb-3 justify-content-center">
                        @if($getPost)
                            <div class="card-header"><h4>{{$getPost->title}}</h4></div>
                            <div class="card-body">
                                <p class="card-text">{{ $getPost->username }}</p>
                                <hr>
                                <p class="card-text">{{ $getPost->text }}</p>
                            </div>
                    </div>
                    <hr>
                </div>

                @endif
            </div>
        </div>
    </div>


@endsection
