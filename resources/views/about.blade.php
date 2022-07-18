@extends('layouts.app')

@section('title', 'Welcome to Sofan')

@section('content')
<div role="main" class="main">
    <section class="page-header page-header-classic page-header-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 data-title-border>Who We Are</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="container pb-1">

        <div class="row pt-4">
            <div class="col">
                <div class="overflow-hidden mb-3">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                        <span>The New Way to </span>
                        <span class="word-rotator-words bg-primary">
                            <b class="is-visible">Success</b>
                            <b>Advance</b>
                            <b>Progress</b>
                        </span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-10">
                <div class="overflow-hidden">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Sociis natoque penatibus et magnis dis parturient montes.
                    </p>
                </div>
            </div>
            <div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="450">
                <a href="#" class="btn btn-modern btn-primary mt-1">Join Our Team!</a>
            </div>
        </div>
    </div> --}}
    <section class="section section-default border-0 my-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750">
        <div class="container py-4">

            <div class="row align-items-center">
                <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                    <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                        <div>
                            <img alt="" class="img-fluid" src="{{asset('img/slides/slide-1.jpg')}}">
                        </div>
                        <div>
                            <img alt="" class="img-fluid" src="{{asset('img/slides/slide-2.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overflow-hidden mb-2">
                        <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
                    </div>
                    <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">The Sorghum Farmers Association of Nigeria (SOFAN) is one of the major Commodities Associations in Nigeria, the Association has 21 State branches and FCT Abuja. At the National level, the Association has Board of Directors Chaired by Dr. Mohammed Ali Inname and seven other members of the Board who are providing strategic and policy direction to the Association. Other members of the Board are Aminu Shehu Bello, Mohammed Bello Usman, Nasiru Bello, Mohammed Lawal Ibrahim, Yahuza Garba, Wakala Haliru and Hon. Lawal Yakubu Gada who is the Secretary of the Board and National president of the Association.</p>
                    <p class="mb-0 appear-animation text-justify" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">At the Operational level, the Association is managed by a National Executive Committee headed by the National President in the person of Hon. Lawal Yakubu Gada and Armaya’u Abdulkadir as National Secretary while Adamu Ibrahim Liman is the Vice President with other members of the Executive Committee. </p>
                </div>
            </div>

        </div>
    </section>

    <div class="container">

        <div class="row mt-5 py-3">
            <div class="col-md-6">
                <div class="toggle toggle-primary toggle-simple m-0" data-plugin-toggle>
                    <section class="toggle active mt-0">
                        <label>Objectives for establishing SOFAN are</label>
                        <div class="toggle-content">
                            <ol>
                                <li>To sensitize farmers across the country to embark on Sorghum farming;</li>
                                <li>To create awareness on new technologies of Sorghum Farming.</li>
                                <li>To bring together Sorghum farmers in Nigeria under one umbrella;</li>
                                <li>To Create Self-help Projects among sorghum farmers across the country.</li>
                                <li>To assist members to get relevant inputs to boost their product.</li>
                            </ol>
                        </div>
                    </section>
                    <section class="toggle">
                        <label>Our Mission</label>
                        <div class="toggle-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor.</p>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-6">
               <img class="img-fluid" src="{{asset('img/farmer.jpg')}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col py-4">
                <hr class="solid">
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-8 mx-md-auto text-center">

                <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-2">Our <strong class="font-weight-extra-bold">History</strong></h2>
                <p>How we started, lorem ipsum dolor sit amet, consectetur adipiscing elit ac laoreet libero.</p>

                <section class="timeline" id="timeline">
                    <div class="timeline-body">
                        <div class="timeline-date">
                            <h3 class="text-primary font-weight-bold">2018</h3>
                        </div>

                        <article class="timeline-box left text-left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <div class="timeline-box-arrow"></div>
                            <div class="p-2">
                                <img alt="" class="img-fluid" src="img/history/history-3.jpg" />
                                <h3 class="font-weight-bold text-3 mt-3 mb-1">New Office</h3>
                                <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante.</p>
                            </div>
                        </article>

                        <div class="timeline-date">
                            <h3 class="text-primary font-weight-bold">2012</h3>
                        </div>

                        <article class="timeline-box right text-left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                            <div class="timeline-box-arrow"></div>
                            <div class="p-2">
                                <img alt="" class="img-fluid" src="img/history/history-2.jpg" />
                                <h3 class="font-weight-bold text-3 mt-3 mb-1">New Partners</h3>
                                <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat.</p>
                            </div>
                        </article>

                        <div class="timeline-date">
                            <h3 class="text-primary font-weight-bold">2006</h3>
                        </div>

                        <article class="timeline-box left text-left appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                            <div class="timeline-box-arrow"></div>
                            <div class="p-2">
                                <img alt="" class="img-fluid" src="img/history/history-1.jpg" />
                                <h3 class="font-weight-bold text-3 mt-3 mb-1">Foundation</h3>
                                <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel consequat, ante.</p>
                            </div>
                        </article>
                    </div>
                </section>

            </div>
        </div> --}}

    </div>

    <section class="section section-default border-0 my-5">
        <div class="container py-4">
            <div class="row">
                <div class="col pb-4 text-center">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-2">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
                </div>
            </div>
            <div class="row pb-4 mb-2">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                        <span class="thumb-info-wrapper border-radius-0">
                            <a href="about-me.html">
                                <img src="img/team/Shehu-of-Borno.webp" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Grand Patron of SOFAN</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text" style="font-weight: 700;">His Royal Highness Abubakar IBN Umar Garbai El-kanemi – The Shehu of Borno</span>
                        </span>
                    </span>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                        <span class="thumb-info-wrapper border-radius-0">
                            <a href="about-me.html">
                                <img src="img/team/Dr-Ali-Inname.jpg" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Chairman, Board of Trustees (BOT)</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text" style="font-weight: 700;">Dr. Mohammed Ali Inname - Sokoto State Commissioner for Health</span>
                        </span>
                    </span>
                </div>
                {{-- <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                        <span class="thumb-info-wrapper border-radius-0">
                            <a href="about-me.html">
                                <img src="img/team/team-3.jpg" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Rick Edward Doe</span>
                                    <span class="thumb-info-type">Developer</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div> --}}
                {{-- <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                        <span class="thumb-info-wrapper border-radius-0">
                            <a href="about-me.html">
                                <img src="img/team/team-4.jpg" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Melinda Wolosky</span>
                                    <span class="thumb-info-type">Design</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- <div class="container">
        <div class="row py-5 my-5">
            <div class="col">
        
                <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-1.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-3.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-5.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-6.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </div> --}}

</div>
@endsection
