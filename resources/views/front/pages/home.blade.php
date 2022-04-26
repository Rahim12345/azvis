@extends('front.layouts.master')

@section('title') -   @endsection
@section('css')

@endsection

@section('content')
    <section class="overflow_hidden owl-stage-outer">
        <div class="container-fluid">
            <div class="row slideshow_heding">

                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($banners as $banner)
                            @php
                                $ext = explode('.',$banner->src)[1];
                            @endphp

                            @if($ext != 'mp4')
                                <div class="carousel-item">
                                    <img src="{{ asset('files/home/'.$banner->src) }}" class="d-block w-100 img-fluid" alt="...">
                                    <div class="carousel-caption">
                                        <h4>{{ $banner->{'text_'.app()->getLocale()} }}</h4>
                                        <div class="popup">
                                            <a href="javascript:(0)" data-effect="mfp-zoom-in" class="step1 btn">{{ __('static.onlayn_qeydiyyat') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="carousel-item active">
                                    <video class="img-fluid" autoplay loop muted>
                                        <source src="{{ asset('files/home/'.$banner->src) }}" type="video/mp4" />
                                    </video>
                                    <div class="carousel-caption">
                                        <h4>{{ $banner->{'text_'.app()->getLocale()} }}</h4>
                                        <div class="popup">
                                            <a href="javascript:(0)"  data-effect="mfp-zoom-in" class="step1 btn">{{ __('static.onlayn_qeydiyyat') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>
        </div>
    </section>

    <section class="alt-menu overflow_hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="swiper-container col-lg-10">
                    <div class="swiper-wrapper ">
                        @foreach($home_sliders as $slider)
                        <div class="card swiper-slide ">
                            <a href="{{ $slider->link }}">
                                <span>{{ $slider->{'text_'.app()->getLocale()} }}</span>
                                <picture>
                                    <img class="pic" src="{{ asset('files/home/'.$slider->src) }}" alt="" />
                                </picture>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-2 f1 z-index animated fadeInDown animation animation-delay-25">
                    <div class="card lastest swiper-slide">
                        <div class="bg-picture"></div>
                        <a href="about.html">
                            <span class="last">{{ __('static.sirket_haqqinda') }}</span>
                            <picture>
                                <i class="fa-solid fa-circle-right"></i>
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="insurance overflow_hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="insurance_alt col-xl-8 col-lg-12 wow fadeInLeft"  data-wow-delay=".3s">
                    <div class="col-lg-3 colm-md-3 col-sm-3">
                        <div class="left_price">
                            <img src="{{ asset('azwis') }}/img/mainpage/sigorta/sigortali-stom 1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 right_price_top">
                        <div class="right_price">
                            <h2>SIĞORTALI STOMATOLOGİYA <br>
                                PAKETLƏRİ</h2>
                        </div>
                    </div>
                </div>
                <div class="insurance_bottom col-xl-3 col-lg-12 wow fadeInRight"  data-wow-delay=".3s">
                    <div class="col-lg-4 col-md-3">
                        <div class="right_price">
                            <img src="{{ asset('azwis') }}/img/mainpage/sigorta/plus.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-9 f2">
                        <div>
                            <h2>TƏCİLİ YARDIM </h2>
                            <p> *9999</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

{{--    <section class="partners overflow_hidden animated wow fadeInUp"  data-wow-delay=".3s">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="titl">--}}
{{--                    <h2>Partnyorlar</h2>--}}
{{--                    <p>Beynəlxalq standartlara uyğun tibbi xidmət sistemini və təfəkkürünü formalaşdırmaq və həyata keçirməkdən--}}
{{--                        ibarətdir.</p>--}}
{{--                </div>--}}
{{--                <div class="swiper-container">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="item swiper-slide">--}}

{{--                            <div class="col-lg-6 col-md-12 fl">--}}

{{--                                <div class="titl">--}}
{{--                                    <p>Dentist-ortoped</p>--}}
{{--                                    <h1>Elxan <br> Məmmədov</h1>--}}
{{--                                    <button class="btn"><a href="javascript:(0)">Ətraflı oxu</a><i--}}
{{--                                            class="fa-solid fa-circle-chevron-right"></i></button>--}}
{{--                                </div>--}}

{{--                                <div class="prev">--}}
{{--                                    <img src="{{ asset('azwis') }}/img/mainpage/bottom_slider/prev.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-12  fr">--}}

{{--                                <div class="imag">--}}
{{--                                    <img src="{{ asset('azwis') }}/img/mainpage/bottom_slider/man.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="next">--}}
{{--                                    <img src="{{ asset('azwis') }}/img/mainpage/bottom_slider/next.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item swiper-slide">--}}
{{--                            <div class="col-lg-6 col-md-12  fl">--}}

{{--                                <div class="titl">--}}
{{--                                    <p>Dentist-ortoped</p>--}}
{{--                                    <h1>Elxan <br> Məmmədov</h1>--}}
{{--                                    <button class="btn"><a href="javascript:(0)">Ətraflı oxu</a><i--}}
{{--                                            class="fa-solid fa-circle-chevron-right"></i></button>--}}
{{--                                </div>--}}

{{--                                <div class="prev">--}}
{{--                                    <img src="{{ asset('azwis') }}/img/mainpage/bottom_slider/prev.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-12  fr">--}}

{{--                                <div class="imag">--}}
{{--                                    <img src="{{ asset('azwis') }}/img/mainpage/bottom_slider/man.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="next">--}}
{{--                                    <img src="{{ asset('azwis') }}/img/mainpage/bottom_slider/next.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection

@section('js')

@endsection
