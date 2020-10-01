@extends('layouts.layout')

@section('title', 'MCC Forum | Support Team')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="homecontent">
                    <div class="card bg-light mb-3 justify-content-center">
                        @if($getPost)
                            <div class="card-body">
                                <p class="card-title" style="text-transform: uppercase; font-weight: 900;  ">{{$getPost->title}}</p>
                                <hr>
                                <div class="row">
                                    <div class="col-1"><p class="card-text"><img
                                                src="{{ $getPost->user->profile_image }}"
                                                style="max-width: 70px; border-radius: 50%;"></p></div>
                                    <div class="col-1"><p class="card-text">{{ $getPost->user->name }}</p></div>
                                    <div class="col-8 text-center"><p class="card-text">{!!$getPost->text !!}</p></div>
                                    <div class="col-2"><p class="card-text">{{ $getPost->created_at }}</p></div>
                                </div>
                            </div>
                    </div>
                    <hr>
                </div>

                @endif
            </div>
        </div>

        @include('front.components.comments.commentsDisplay')

        @include('front.components.comments.comments')
    </div>

@endsection
