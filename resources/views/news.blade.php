@extends('layouts.app')

@section('title', 'Welcome to Sofan')

@section('content')
<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">

                    <h1 class="text-dark font-weight-bold text-8">News & Events</h1>
<span class="sub-title text-dark">Check out our Latest News & Events</span>
                </div>

                <div class="col-md-12 align-self-center order-1">

                    <ul class="breadcrumb d-block text-center">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li class="active">News & Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts">

                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="/storage/captions/{{$post->caption}}"class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{route('show-news', $post->slug)}}">{{$post->title}}</a></h2>
                                    <p>{{ Str::of($post->body)->limit(100)}}</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-calendar"></i> {{$post->created_at->diffForHumans()}}</span>
                                        {{-- <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> --}}
                                        <span class="d-block mt-2"><a href="{{route('show-news', $post->slug)}}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>

                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>

                    <div class="row float-right">
                        <div class="col">
                           {{$posts->links()}}
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>
@endsection
