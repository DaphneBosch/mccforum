<div class="row justify-content-center">
    <div class="col-12">
        <div class="title-announce">
            <h1>Add comment</h1>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-12">
        <form method="post" action="/creations/{{$getPost->id}}/store">
            @csrf
            <div class="form-group text-center">
                <textarea id="mytextarea" name="comment" class="form-control" rows="4" style="max-width: 2000px"></textarea>
                <input type="hidden" name="post_id" value="{{ $getPost->id }}"/>
            </div>
            <div class="form-group text-center">
                <div class="commandcreate">
                    <button class="btn btn-danger" type="submit">Add comment</button>
                </div>
            </div>
        </form>
    </div>
</div>
