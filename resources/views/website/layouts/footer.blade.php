<!-- start all footer -->



<div class="top-footer">
    <div class="row">
        <div class="col-md-6">
            <div class="social-media">
                <ul>
                    @if($contact->facebook)
                        <li><a href="{{$contact->facebook}}"> <i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if($contact->instagram)
                        <li><a href="{{$contact->instagram}}"> <i class="fab fa-instagram"></i> </a></li>
                    @endif
                    @if($contact->twitter)
                        <li><a href="{{$contact->twitter}}"> <i class="fab fa-twitter"></i></a></li>
                    @endif
                    @if($contact->youtube)
                        <li><a href="{{$contact->youtube}}"> <i class="fab fa-youtube"></i></a></li>
                    @endif

                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="social-media">
                <h4>للاتصال :  {{$contact->phone}} </h4>
            </div>
        </div>
    </div>
</div>
<!------------------------------- top-footer -->


<!------------------------------- footer -->
<footer>
    <div class="overlay-fot"></div>
    <div class="bng-fot">
        <img src="{{assetPath('website/images/fot.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="logo-foter">
                    <img src="{{assetPath('website/images/Logooooo.png')}}" alt="">
                    <p>
                       {{$about->{'about_'.currentLang()}->description }}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box-footer">
                    <h4>روابط سريعة</h4>
                    <ul>
                        <li> <a href="{{url('/')}}"> الرئيسية</a></li>
                        <li> <a href="{{url('about')}}"> من نحن</a></li>
                        {{--<li> <a href="{{url('service')}}"> خدماتنا </a></li>--}}
                        <li> <a href="{{url('gallery')}}"> معرض الصور</a></li>
                        <li> <a href="{{url('video')}}"> الفديو </a></li>
                        <li> <a href="{{url('contact')}}"> اتصل بنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box-footer">
                    <h4>خدماتنا </h4>
                    <ul>
                        @if($service)
                            @foreach($service as $serviceItem)
                                <li>
                                    <a href="{{url('service-details/' . $serviceItem->id)}}">
                                        {{$serviceItem->{'service_'.currentLang()}->title }}
                                    </a>
                                </li>
                            @endforeach
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!------------------------------- footer -->

