@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                  <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        Title
                        <input type="text" name="title" value="{{old('title', isset($post) ? $post->title : '')}}" class="form-control" placeholder="Post Title">
                    </div>
                    <div class="form-group">
                        Caption
                        <input type="file" name="caption" class="form-control">
                    </div>
                    <div class="form-group">
                        Body
                       <textarea name="body" id="" cols="30" rows="10" class="form-control">{{old('body', isset($post) ? $post->body : '')}}</textarea>
                    </div>
                    <div class="form-group">
                        <br>
                       <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
