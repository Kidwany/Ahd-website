@extends('website.layouts.layouts')
@section('title', 'من نحن')
@section('content')



    <!-- =====top slid-page ===== -->
    <div class="top-slidpage">
        <h3>من نحن</h3>
    </div>
    <!-- =====top slid-page ===== -->

    <!-- =====start about ===== -->
    <div class="about sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bar-hed text-center ">
                        <h3>من نحن </h3>
                        <i class="lef fas fa-tooth"></i>
                        <i class="minus fas fa-minus"></i>
                        <i class="compress fas fa-th-large"></i>
                        <i class="minus fas fa-minus"></i>
                        <i class="rig fas fa-tooth"></i>
                    </div>
                    <p>
                        {{$about->{'about_' . currentLang()}->description }}

                    </p>

                </div>
                <div class="col-lg-6">
                    <div class="box-min-about wow fadeInRight" data-wow-duration="1.1s">
                        <h4>مهمتنا</h4>
                        <p> {{$about->{'about_' . currentLang()}->mission }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-min-about wow fadeInLeft" data-wow-duration="1.1s">
                        <h4>رؤيتنا</h4>
                        <p>
                            {{$about->{'about_' . currentLang()}->vision }}
                        </p>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- =====end about ===== -->
    <!--strat about-us ------------------------------------ -->
    <div class="about-us sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider-about">
                        <div class="border-slider-about-left"></div>
                        <div class="border-slider-about-right"></div>
                        <div class="owl-carousel owl-theme" id="slider-about">
                            <div class="item">
                                <div class="box-slider-about">
                                    <img src="{{assetPath($about->aboutImage->path)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="box-about-us-icon">
                                <img src="{{assetPath('website/images/icon-about/team.png')}}" alt="">
                                <h2>+900</h2>
                                <h6>عميل</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="box-about-us-icon">
                                <img src="{{assetPath('website/images/icon-about/diploma.png')}}" alt="">
                                <h2>10</h2>
                                <h6>مشاريع</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="box-about-us-icon">
                                <img src="{{assetPath('website/images/icon-about/enterprise.png')}}" alt="">
                                <h2>7</h2>
                                <h6>فروع</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="box-about-us-icon">
                                <img src="{{assetPath('website/images/icon-about/support.png')}}" alt="">
                                <h2>100</h2>
                                <h6>منتجات</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end about-us ------------------------------------ -->


@endsection
