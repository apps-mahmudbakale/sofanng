@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header"><a href="{{ route('posts.index') }}"
                            class="btn btn-primary float-right">Back</a></div>

                    <div class="card-body">
                        <div class="container">
                            <div class="card mb-4">
                                <img class="card-img-top"
                                        src="/storage/captions/{{$post->caption}}" alt="..." />
                                <div class="card-body">
                                    <div class="small text-muted">{{$post->created_at->diffForHumans()}}</div>
                                    <h2 class="card-title">{{$post->title}}</h2>
                                    <p class="card-text text-justify">{{$post->body}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
