@extends('layouts.app')

@section('title', 'Welcome to Sofan')

@section('content')
    <div role="main" class="main">
        <div class="slider-container rev_slider_wrapper" style="height: 700px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider
                data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li data-transition="fade" class="slide-overlay slide-overlay-level-8">
                        <img src="img/slides/slide-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption" data-x="center" data-hoffset="['-115','-115','-115','-185']" data-y="center"
                            data-voffset="['-110','-110','-110','-135']" data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img
                                src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center"
                            data-voffset="['-110','-110','-110','-135']" data-start="700"
                            data-fontsize="['22','22','22','40']" data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">HELLO, WELCOME TO</div>

                        <div class="tp-caption" data-x="center" data-hoffset="['115','115','115','185']" data-y="center"
                            data-voffset="['-110','-110','-110','-135']" data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img
                                src="img/slides/slide-title-border.png" alt=""></div>

                        <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-y="center" data-voffset="['-55','-55','-55','-55']"
                            data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']"
                            data-letterspacing="-1">SORGHUM FARMERS ASSOCIATION OF NIGERIA</h1>



                        {{-- <a class="tp-caption btn btn-light-2 btn-outline font-weight-semibold"
									data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-hash
									data-hash-offset="85"
									href="#main"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="['70','70','70','45']"
									data-whitespace="nowrap"	
									data-fontsize="['15','15','15','33']"	
									data-paddingtop="['15','15','15','40']"
									data-paddingright="['45','45','45','110']"
									data-paddingbottom="['15','15','15','40']"				 
									data-paddingleft="['45','45','45','110']">GET STARTED NOW!</a> --}}

                    </li>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="img/slides/slide-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center"
                            data-voffset="['-110','-110','-110','-135']" data-start="700"
                            data-fontsize="['22','22','22','40']" data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">HELLO, WELCOME TO</div>

                        <div class="tp-caption" data-x="center" data-hoffset="['115','115','115','185']" data-y="center"
                            data-voffset="['-110','-110','-110','-135']" data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img
                                src="img/slides/slide-title-border.png" alt=""></div>

                        <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-y="center" data-voffset="['-55','-55','-55','-55']"
                            data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']"
                            data-letterspacing="-1">SORGHUM FARMERS ASSOCIATION OF NIGERIA</h1>

                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="container ">
            <div class="row py-5 my-5">
                <div class="col-lg-7 appear-animation" data-appear-animation="fadeInRightShorter">
                    <h2 class="font-weight-normal text-6 line-heigh-2 mb-4"><strong
                            class="font-weight-extra-bold">Who</strong> We Are</h2>
                    <p class="text-justify">The Sorghum Farmers Association of Nigeria (SOFAN) is one of the major Commodities Associations in Nigeria, the Association has 21 State branches and FCT Abuja. At the National level, the Association has Board of Directors Chaired by Dr. Mohammed Ali Inname and seven other members of the Board who are providing strategic and policy direction to the Association. Other members of the Board are Aminu Shehu Bello, Mohammed Bello Usman, Nasiru Bello, Mohammed Lawal Ibrahim, Yahuza Garba, Wakala Haliru and Hon. Lawal Yakubu Gada who is the Secretary of the Board and National president of the Association. </p>
                    <a href="#" class="learn-more text-color-primary font-weight-semibold text-2">VIEW MORE<i
                            class="pl-2 fas fa-chevron-right text-2"></i></a>
                </div>
                <div class="col-lg-5  mt-5 mt-lg-0">
                    <img class="img-responsive img-thumbnail rounded img-fluid" src="{{asset('img/slides/slide-2.jpg')}}" width="100%" height="100%" alt="">
                </div>
            </div>
        </div>

        <hr>
    </div>
@endsection
