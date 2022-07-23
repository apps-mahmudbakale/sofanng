@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <div role="main" class="main">

        <section
            class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-primary overlay-show overlay-op-8 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1>Our gallery</h1>

                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li class="active">Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-2">

            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <hr class="solid my-5">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="lightbox"
                                data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                                <div class="owl-carousel owl-theme stage-margin owl-loaded owl-drag owl-carousel-init"
                                    data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}"
                                    style="height: auto;">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-346px, 0px, 0px); transition: all 0.25s ease 0s; width: 1467px; padding-left: 40px; padding-right: 40px;">
                                            <div class="owl-item" style="width: 163.333px; margin-right: 10px;">
                                                <div>
                                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                                        href="img/projects/project-1.jpg">
                                                        <img class="img-fluid" src="img/projects/project-1.jpg"
                                                            alt="Project Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 163.333px; margin-right: 10px;">
                                                <div>
                                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                                        href="img/projects/project-2.jpg">
                                                        <img class="img-fluid" src="img/projects/project-2.jpg"
                                                            alt="Project Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 163.333px; margin-right: 10px;">
                                                <div>
                                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                                        href="img/projects/project-3.jpg">
                                                        <img class="img-fluid" src="img/projects/project-3.jpg"
                                                            alt="Project Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 163.333px; margin-right: 10px;">
                                                <div>
                                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                                        href="img/projects/project-4.jpg">
                                                        <img class="img-fluid" src="img/projects/project-4.jpg"
                                                            alt="Project Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 163.333px; margin-right: 10px;">
                                                <div>
                                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                                        href="img/projects/project-5.jpg">
                                                        <img class="img-fluid" src="img/projects/project-5.jpg"
                                                            alt="Project Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 163.333px; margin-right: 10px;">
                                                <div>
                                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                                        href="img/projects/project-6.jpg">
                                                        <img class="img-fluid" src="img/projects/project-6.jpg"
                                                            alt="Project Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 163.333px; margin-right: 10px;">
                                                <div>
                                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                                        href="img/projects/project-7.jpg">
                                                        <img class="img-fluid" src="img/projects/project-7.jpg"
                                                            alt="Project Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 163.333px; margin-right: 10px;">
                                                <div>
                                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon"
                                                        href="img/projects/project.jpg">
                                                        <img class="img-fluid" src="img/projects/project.jpg"
                                                            alt="Project Image">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav"><button type="button" role="presentation"
                                            class="owl-prev"></button><button type="button" role="presentation"
                                            class="owl-next disabled"></button></div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
