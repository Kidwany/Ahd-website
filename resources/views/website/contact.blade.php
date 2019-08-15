@extends('website.layouts.layouts')
@section('title',  'اتصل بنا ')
@section('content')


    <!-- =====top slid-page ===== -->
    <div class="top-slidpage">
        <h3>اتصل بنا </h3>
    </div>
    <!-- =====top slid-page ===== -->
    <!-- =====start contaict-us===== -->
    <div class="contaict-us-page sections">
        <div class="container">
            <div class="top-addr">
                <div class="box-1 rights">
                    <div class="img-addr">
                        <img src="{{assetPath('website/images/icon-contact/phone-contact.png')}}" alt="">
                    </div>
                    <div class="title-addr">
                        <p>{{$contact->phone}}</p>
                        <p>{{$contact->phone_alt}}</p>
                    </div>
                    <div class="tr-a"></div>
                </div>
                <div class="box-1">
                    <div class="img-addr">
                        <img src="{{assetPath('website/images/icon-contact/map-pin-marked.png')}}" alt="">
                    </div>
                    <div class="title-addr">
                        <p>{{$contact->{'address_' . currentLang()} }}</p>

                    </div>
                    <div class="tr-b"></div>
                </div>
                <div class="box-1 lefts">
                    <div class="img-addr">
                        <img src="{{assetPath('website/images/icon-contact/black-back-closed-envelope-shape.png')}}" alt="">
                    </div>
                    <div class="title-addr">
                        <p>{{$contact->email}}</p>

                    </div>
                    <div class="tr-c"></div>
                </div>
            </div>
            <div class="row">

                <!-- <div class="col-lg-6"> -->
                <form class="contaict-box-form-page" method="post" action="{{url('message')}}">
                    @include('dashboard.layouts.messages')
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" placeholder="الاسم" name="name">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" placeholder="الهاتف" name="phone">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" placeholder="البريد الالكتروني" name="email">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" placeholder="الموضوع" name="title">
                        </div>
                        <div class="col-12">
                            <div class="all">
                                <textarea rows="6" cols="60" placeholder="اكتب راسالتك " name="message"></textarea>
                                <button id="buut-for"> ارسل</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- </div> -->

            </div>
        </div>
        <!-- =====start contaict-us===== -->
        <div class="map">
            <iframe
                src="{{$contact->location}}"
                width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>



@endsection
