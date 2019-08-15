@extends('website.layouts.layouts')
@section('title', 'الرئيسية')
@section('content')




    <!-- =====slider home ===== -->
    <div class="slider-home">
        <div id="myRotator" class="banner-rotator ">
            <ul class="slides">
                <!-- <li data-effect="rotate">
                <a href="#">
                  <img src="./images/slider/slider-1.jpg" data-src="./images/slider/2.jpg" data-thumb="images/thumbs/thumb1.jpg"
                    title="architecture" alt="" />
                </a>
              </li> -->

                @if($slides)
                    @foreach($slides as $slide)
                        <li data-effect="push" data-columns="6" data-direction="down" data-alternate="true" data-depth="0">
                            <a href="#">
                                <img src="{{$slide->image_id ? assetPath($slide->image->path) : ''}}" data-src="{{$slide->image_id ? assetPath($slide->image->path) : ''}}" data-thumb="{{assetPath('website/images/thumbs/thumb2.jpg')}}"
                                     title="3D abstract art" alt="" />
                            </a>
                        </li>
                    @endforeach
                @endif

            </ul>
        </div>
    </div>
    <!-- =====slider home ===== -->

    <!-- =====top-img ===== -->
    <div class="top">
        <img src="{{assetPath('website/images/banner_2.png')}}" alt="">
    </div>
    <!-- =====top-img ===== -->

    <!------------------------------- features -->
    <div class="features sections">
        <div class="container">
            <div class="bar-hed text-center ">
                <h3>المميزات </h3>
                <i class="lef fas fa-tooth"></i>
                <i class="minus fas fa-minus"></i>
                <i class="compress fas fa-th-large"></i>
                <i class="minus fas fa-minus"></i>
                <i class="rig fas fa-tooth"></i>
            </div>
            <!-- <marquee behavior="" width="100%" direction="right">المميزات</marquee> -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="box-features">
                        <img src="{{assetPath('website/images/features/1.png')}}" alt="">
                        <h6>مواعيد دقيقة</h6>
                        <p>ملتزمون بالمواعيد </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-features">
                        <img src="{{assetPath('website/images/features/1.png')}}" alt="">
                        <h6>مواعيد دقيقة</h6>
                        <p>ملتزمون بالمواعيد </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-features">
                        <img src="{{assetPath('website/images/features/1.png')}}" alt="">
                        <h6>مواعيد دقيقة</h6>
                        <p>ملتزمون بالمواعيد </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-features">
                        <img src="{{assetPath('website/images/features/1.png')}}" alt="">
                        <h6>مواعيد دقيقة</h6>
                        <p>ملتزمون بالمواعيد </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------- features -->

    <!------------------------------- about-us -->
    <div class="about-us sections">
        <div class="container">
            <div class="bar-hed text-center ">
                <h3>من نحن</h3>
                <i class="lef fas fa-tooth"></i>
                <i class="minus fas fa-minus"></i>
                <i class="compress fas fa-th-large"></i>
                <i class="minus fas fa-minus"></i>
                <i class="rig fas fa-tooth"></i>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="title-about">
                        <h3>عن عيادة عهد</h3>
                        {{$about->{'about_'.currentLang()}->description }}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="box-img-about">
                        <div class="pos-img">
                            <img src="{{assetPath('website/images/about/1.jpg')}}" alt="">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="min-img">
                                    <img src="{{assetPath('website/images/about/2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="min-img">
                                    <img src="{{assetPath('website/images/about/3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="min-img">
                                    <img src="{{assetPath('website/images/about/4.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="min-img">
                                    <img src="{{assetPath('website/images/about/5.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------- about-us -->

    <!------------------------------- service -->
    <div class="service  sections">
        <div class="container">
            <div class="bar-hed text-center ">
                <h3>خدماتنا </h3>
                <i class="lef fas fa-tooth"></i>
                <i class="minus fas fa-minus"></i>
                <i class="compress fas fa-th-large"></i>
                <i class="minus fas fa-minus"></i>
                <i class="rig fas fa-tooth"></i>
            </div>
            <div class="row">
                @if($service)
                    @foreach($service as $item)
                        <div class="col-lg-3 col-md-6">
                            <div class="box-service">
                                <a href="{{url('service-details/' . $item->id)}}">
                                    <div class="img-service">
                                        <img src="{{$item->icon ? assetPath($item->iconImage->path) : '' }}" alt="">
                                    </div>
                                    <div class="title-service">
                                        <h4>{{$item->{'service_' . currentLang()}->title }}</h4>
                                    </div>
                                </a>
                                <div class="red"></div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!------------------------------- service -->

    <!------------------------------- gallery -->
    <div class="gallery sections">
        <div class="container">
            <div class="bar-hed text-center ">
                <h3>معرض الصور </h3>
                <i class="lef fas fa-tooth"></i>
                <i class="minus fas fa-minus"></i>
                <i class="compress fas fa-th-large"></i>
                <i class="minus fas fa-minus"></i>
                <i class="rig fas fa-tooth"></i>
            </div>


            <!-- <div class="container py-4"> -->
            <div class=" gallery row">
                @if($images)
                    @foreach($images as $image)
                        <div class="col-lg-3 col-md-6">
                            <div class="galleryItem box-gallery min">
                                <img class="card-img-top" src="{{assetPath($image->image->path)}}" data-text="project 2">
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

            <div class="bt">
                <a href="{{url('gallery')}}">المزيد</a>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <!------------------------------- gallery -->

    <!------------------------------- subsc -->
    <!-- =====start contaict-us===== -->
    <div class="contaict-us sections">
        <div class="container">
            @include('dashboard.layouts.messages')
            <form action="{{url('message')}}" method="post" class="contaict-box-form">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <input type="text" placeholder="الاسم" name="name">
                    </div>
                    <div class="col-6">
                        <input type="text" placeholder="الهاتف" name="phone">
                    </div>
                    <div class="col-6">
                        <input type="text" placeholder="الايميل" name="email">
                    </div>
                    <div class="col-6">
                        <input type="text" placeholder="الموضوع" name="title">
                    </div>
                    <div class="col-12">
                        <div class="all">
                            <textarea rows="6" cols="60" placeholder="اكتب رسالتك" name="message"></textarea>
                            <button id="buut-for"> ارسل </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- =====start contaict-us===== -->
    <!-------------------------------map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d884156.5168371118!2d31.23571159999999!3d30.044419599999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1563788860097!5m2!1sar!2seg"
            width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
    </div>

@endsection
