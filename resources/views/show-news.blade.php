@extends('layouts.app')

@section('title', 'News & Events')

@section('content')
    <div role="main" class="main">
        <div class="container py-4">

            <div class="row">
                <div class="col">
                    <div class="blog-posts single-post">

                        <article class="post post-large blog-single-post border-0 m-0 p-0">
                            <div class="post-image ml-0">
                                <a href="">
                                    <img src="/storage/captions/{{$post->caption}}" style="width: 500%;"
                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                </a>
                            </div>

                            <div class="post-date ml-0">
                                <span class="day">{{$post->created_at->format('d')}}</span>
                                <span class="month">{{$post->created_at->format('M')}}</span>
                            </div>

                            <div class="post-content ml-0">

                                <h2 class="font-weight-bold">{{$post->title}}</h2>
                                <p class="text-justify">{{$post->body}}</p>
                            </div>
                        </article>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
