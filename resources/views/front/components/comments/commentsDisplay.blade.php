<div class="row">
    <div class="col-12">
        @foreach($getPost->comments as $comment)
            <div class="forumposts">
                <div class="card bg-light mb-3 justify-content-center">

                    <div class="card-body">
                        <div class="row">
                            @if($getPost )
                            @if($comment->user->profile_image == null)
                                <div class="col-1"><p class="card-text"><img
                                            src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Placeholder_no_text.svg"
                                            style="max-width: 60px; border-radius: 50%;"></p></div>
                            @else
                                <div class="col-1"><p class="card-text"><img src="{{ $comment->user->profile_image }}"
                                                                             style="max-width: 60px; border-radius: 50%;">
                                    </p></div>
                            @endif
                            <div class="col-2"><p class="card-text">{{ $comment->user->name }}</p></div>
                            <div class="col-6"><p class="card-text text-center">{{ $comment->comment }}</p></div>
                            <div class="col-1 text-center"><p class="card-text">{{ $comment->created_at }}</p></div>
                        </div>
                    </div>

                    @endif
                    {{--        <form method="post" action="/creations/{{$getPost->id}}/reply/store">--}}
                    {{--            @csrf--}}
                    {{--            <div class="form-group">--}}
                    {{--                <input type="text" name="comment" class="form-control" />--}}
                    {{--                <input type="hidden" name="post_id" value="{{ $comments->post_id }}" />--}}
                    {{--                <input type="hidden" name="comment_id" value="{{ $comments->id }}" />--}}
                    {{--            </div>--}}
                    {{--        </form>--}}
                </div>
                @endforeach
            </div>
    </div>

</div>
