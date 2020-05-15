@extends('frontend.layouts.app')

@section('content')

<section class="box-slider-search">
    <div class="container">
        <h1 class="nocontent outline">--- Search form ---</h1>
        <div class="row">
            <div class="col-md-8">
                <div id="rev_slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                    data-alias="classicslider1">
                    <div class="tp-banner-container">
                        <div class="tp-banner">
                            <ul>
                                <li data-transition="fade" data-slotamount="7" data-masterspeed="2000"
                                    data-saveperformance="on" data-title="Ken Burns Slide">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ url('frontend/img/slides/home2.jpg') }}" alt="2"
                                        data-lazyload="{{ url('frontend/img/slides/home2.jpg') }}"
                                        data-bgposition="right top" data-kenburns="off" data-duration="12000"
                                        data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100"
                                        data-bgpositionend="center bottom">
                                    <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="130"
                                        data-hoffset="0" data-x="center" style="">
                                        <img alt="" src="{{ url('frontend/img/4.png') }}"
                                            style="width: 110px; height: 110px;">
                                    </div>
                                    <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="272"
                                        data-hoffset="0" data-x="center" style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                                 font-weight: 400;">
                                        Mercedes-Benz
                                    </div>
                                    <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="320"
                                        data-hoffset="0" data-x="center"
                                        style="color: #fff; font-size: 13px; text-transform: uppercase; letter-spacing: 10px;">
                                        <i class="fa fa-map-marker"> </i> Not caroliana 234
                                    </div>
                                    <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="365"
                                        data-hoffset="0" data-x="center" style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                                 font-family: Montserrat; font-weight: 400;">
                                        345000 $
                                    </div>
                                    <a href="vehicul.html"
                                        class="pull-left tp-caption lfb tp-resizeme rs-parallaxlevel-0" data-x="center"
                                        data-y="420"
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;
                                               scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="500" data-start="1200" data-easing="Power3.easeInOut"
                                        data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:15px 28px;
                                               color: #fff;text-transform: uppercase;
                                               border: none; background:#000;
                                               font-size: 12px; letter-spacing: 3px;
                                               font-family: Montserrat; border-radius: 0px;
                                               display: table; transition: .4s;">More Details</a>

                                </li>


                                <li data-transition="fade" data-slotamount="7" data-masterspeed="2000"
                                    data-saveperformance="on" data-title="Ken Burns Slide">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ url('frontend/img/slides/home1.jpg') }}" alt="2"
                                        data-lazyload="{{ url('frontend/img/slides/home1.jpg') }}"
                                        data-bgposition="right top" data-kenburns="off" data-duration="12000"
                                        data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100"
                                        data-bgpositionend="center bottom">
                                    <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="130"
                                        data-hoffset="0" data-x="center" style="">
                                        <img alt="" src="{{ url('frontend/img/3.png') }}"
                                            style="width: 110px; height: 110px;">
                                    </div>
                                    <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="272"
                                        data-hoffset="0" data-x="center" style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                                 font-weight: 400;">
                                        Mercedes-Benz
                                    </div>
                                    <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="320"
                                        data-hoffset="0" data-x="center"
                                        style="color: #fff; font-size: 13px; text-transform: uppercase; letter-spacing: 10px;">
                                        <i class="fa fa-map-marker"> </i> Not caroliana 234
                                    </div>
                                    <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="365"
                                        data-hoffset="0" data-x="center" style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                                 font-family: Montserrat; font-weight: 400;">
                                        345000 $
                                    </div>
                                    <a href="vehicul.html"
                                        class="pull-left tp-caption lfb tp-resizeme rs-parallaxlevel-0" data-x="center"
                                        data-y="420"
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;
                                               scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="500" data-start="1200" data-easing="Power3.easeInOut"
                                        data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:15px 28px;
                                               color: #fff;text-transform: uppercase;
                                               border: none; background:#000;
                                               font-size: 12px; letter-spacing: 3px;
                                               font-family: Montserrat; border-radius: 0px;
                                               display: table; transition: .4s;">More Details</a>

                                </li>



                                <li data-transition="fade" data-slotamount="7" data-masterspeed="2000"
                                    data-saveperformance="on" data-title="Ken Burns Slide">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ url('frontend/img/slides/home3.jpg') }}" alt="2"
                                        data-lazyload="{{ url('frontend/img/slides/home3.jpg') }}"
                                        data-bgposition="right top" data-kenburns="off" data-duration="12000"
                                        data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100"
                                        data-bgpositionend="center bottom">
                                    <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="130"
                                        data-hoffset="0" data-x="center" style="">
                                        <img alt="" src="{{ url('frontend/img/3.png') }}"
                                            style="width: 110px; height: 110px;">
                                    </div>
                                    <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="272"
                                        data-hoffset="0" data-x="center" style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                                 font-weight: 400;">
                                        Mercedes-Benz
                                    </div>
                                    <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="320"
                                        data-hoffset="0" data-x="center"
                                        style="color: #fff; font-size: 13px; text-transform: uppercase; letter-spacing: 10px;">
                                        <i class="fa fa-map-marker"> </i> Not caroliana 234
                                    </div>
                                    <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300"
                                        data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="365"
                                        data-hoffset="0" data-x="center" style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                                 font-family: Montserrat; font-weight: 400;">
                                        345000 $
                                    </div>
                                    <a href="vehicul.html"
                                        class="pull-left tp-caption lfb tp-resizeme rs-parallaxlevel-0" data-x="center"
                                        data-y="420"
                                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;
                                               scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                        data-speed="500" data-start="1200" data-easing="Power3.easeInOut"
                                        data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                        data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:15px 28px;
                                               color: #fff;text-transform: uppercase;
                                               border: none; background:#000;
                                               font-size: 12px; letter-spacing: 3px;
                                               font-family: Montserrat; border-radius: 0px;
                                               display: table; transition: .4s;">More Details</a>

                                </li>
                            </ul>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                </div><!-- END REVOLUTION SLIDER -->
            </div>

            <div class="pull-right ">

                @if(Session::has('Success'))
                <p class="alert alert-success">{{Session::get('Success')}}</p>
                @elseif(Session::has('Error'))
                <p class="alert alert-danger">{{Session::get('Error')}}</p>
                @endif

            </div>

            <div class="col-md-4">
                <div class="horizontal-search v-f-p">
                    <div class="search-form">
                        <h1 class="fsearch-title">
                            <i class="fa fa-search"></i><span>SEARCH FOR vehicul</span>
                        </h1>
                        {!! Form::Open(['url'=>'reservations/create',]) !!}

                        <div>
                            <div>
                                <div class="form-group col-md-12">
                                    {{ Form::label("date_from", 'Date From') }}

                                    {{ Form::date('date_from', new \DateTime(), ['class' => ' form-control ']) }}
                                </div>
                                <div class="form-group col-md-12">
                                    {{ Form::label("date_to", 'Date To', ['class' => 'control-label']) }}

                                    {{ Form::date('date_to', new \DateTime(), ['class' => 'form-control']) }}
                                </div>                                         
                            </div>
                        </div>
                        {!! Form::Close()!!}

                        {!! Form::Open(['url'=>'vehicle','method'=>'GET'])!!}
                        <a href="/vehicle">Search</a>
                        {!! Form::Close()!!}
                    </div>

                    <!-- Services Sec -->

                </div>
            </div>
        </div>
    </div>
</section>


<section class="block remove-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading4">
                    <h2>RECENT VEHICULS </h2>
                    <span>Lorem ipsum dolor</span>
                </div>
                <div class="vehiculs-sec">
                    <div class="carousel-prop">
                        @foreach($cars as $car)
                        <div class="vehiculs-box">
                            <div class="vehiculs-thumb">
                                <img src="{{ url($car->car_image) }}" alt="" />
                                <span class="spn-status"> Damaged</span>
                                <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                <div class="user-preview">
                                    <a class="col" href="agent.html">
                                        <img alt="Camilė" class="avatar avatar-small"
                                            src="{{ url('frontend/img/4.png') }}" title="Camilė">
                                    </a>
                                </div>
                                <a class="proeprty-sh-more" href="{{ url('vehicle') }}"><i
                                        class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right">
                                    </i></a>
                                <p class="car-info-smal">
                                    {{$car->content}}<br>

                                </p>
                            </div>
                            <h3><a href="{{ url('vehicle') }}" title="">{{($car->car_name)}}</a></h3>
                            <span class="price">${{$car->cost_per_kilometer}}</span>
                        </div>

                        @endforeach

                    </div><!-- Carousel -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="block">
    <div style="background: url('frontend/img/call-to-action-bg.jpg')" repeat scroll 50% 422.28px transparent;
        background-attachment: fixed;" class="parallax scrolly-invisible  blackish"></div>
    <!-- PARALLAX BACKGROUND IMAGE -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="vehiculs-text-bar">
                    <h3>Sell or Rent <span> vehiculs </span>Quickly ! </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare porttitor diam<br /> a
                        accumsan justo laoreet suscipit. Maecenas at bibendum nunc</p>
                    <a href="#" title="" class="flat-btn">Joing us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="block">
    <div class="container">
        <div class="heading4">
            <h2>FEATURED VEHICULS</h2>
            <span>Lorem ipsum dolor consectetu</span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="vehiculs-sec">
                    <div class="row">
                        @foreach(App\car::where('status',1)->get() as $car)
                        <div class="col-md-4">
                            <div class="vehiculs-box">
                                <div class="vehiculs-thumb">
                                    <img src="{{ url($car->car_image) }}" alt="" />
                                    <!-- <span class="spn-status"> Semi-New </span> -->
                                    <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                                    <div class="user-preview">
                                        <a class="col" href="agent.html">
                                            <img alt="Camilė" class="avatar avatar-small"
                                                src="{{ url('frontend/img/4.png') }}" title="Camilė">
                                        </a>
                                    </div>
                                    <a class="proeprty-sh-more" href="{{ url('vehicle') }}"><i
                                            class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right">
                                        </i></a>
                                    <p class="car-info-smal">
                                        {{ $car->content}}<br>

                                    </p>
                                </div>
                                <h3><a href="vehicul.html" title="">{{ $car->car_name}}</a></h3>
                                <span class="price">{{ $car->cost_per_kilometer}}</span>
                                <span class="rate-it">
                                    <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                    <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                    <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                    <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                    <i title="nice" class="ti ti-star off star-off-png"></i>
                                </span>
                            </div><!-- prop Box -->
                        </div>

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="agents-carousal-sec">
                    <div class="heading4">
                        <h2>OUR PARTNERS </h2>
                        <span>Lorem ipsum dolor</span>
                    </div>
                    <div class="our-clients-sec">
                        <ul class="carousel-client">
                            <li>
                                <a href="#" title=""><img src="{{ url('frontend/img/clients/our-client1.jpg') }}"
                                        alt="" /></a>
                            </li>
                            <li>
                                <a href="#" title=""><img src="{{ url('frontend/img/clients/our-client2.jpg') }}"
                                        alt="" /></a>
                            </li>
                            <li>
                                <a href="#" title=""><img src="{{ url('frontend/img/clients/our-client3.jpg') }}"
                                        alt="" /></a>
                            </li>
                            <li>
                                <a href="#" title=""><img src="{{ url('frontend/img/clients/our-client4.jpg') }}"
                                        alt="" /></a>
                            </li>
                            <li>
                                <a href="#" title=""><img src="{{ url('frontend/img/clients/our-client5.jpg') }}"
                                        alt="" /></a>
                            </li>
                            <li>
                                <a href="#" title=""><img src="{{ url('frontend/img/clients/our-client1.jpg') }}"
                                        alt="" /></a>
                            </li>
                            <li>
                                <a href="#" title=""><img src="{{ url('frontend/img/clients/our-client3.jpg') }}"
                                        alt="" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
@section('jsCode')
<script type="text/javascript">
    //        $('.datetime').datetimepicker({
    //     format: 'yyyy-mm-dd'
    // });
    $(document).ready(function () {
        "use strict";

        jQuery('.tp-banner').show().revolution({
            dottedOverlay: "none",
            delay: 16000,
            startwidth: 1170,
            startheight: 700,
            hideThumbs: 200,
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 5,
            navigationType: "bullet",
            navigationArrows: "solo",
            navigationStyle: "preview1",
            touchenabled: "on",
            onHoverStop: "on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
            parallax: "mouse",
            parallaxBgFreeze: "on",
            parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
            keyboardNavigation: "off",
            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,
            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",
            spinner: "spinner4",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            forceFullWidth: "off",
            hideThumbsOnMobile: "off",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            videoJsPath: "rs-plugin/videojs/",
            fullScreenOffsetContainer: ""
        });

        $(".carousel-prop").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: true,
            dots: true,
            nav: false,
            items: 4,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        });

        $(".carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 0,
            items: 3
        });

        $(".carousel-client").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 30,
            items: 5,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        });



    });

</script>


@stop
