<!-- =========== start navbar =========== -->
<!-- Mobile Header -->


<div class="wsmobileheader clearfix ">
    <a id="wsnavtoggle" class="wsanimated-arrow" href="{{url('/')}}"><span></span></a>
    <span class="smllogo"><img src="{{$setting->logo ? assetPath($setting->image->path) : assetPath('website/images/menu-logo.png')}}" width="80" alt="" /></span>
    <a href="tel:123456789" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
</div>
<!-- Mobile Header -->
<div class="wsmainfull clearfix">
    <div class="wsmainwp clearfix">
        <div class="desktoplogo">
            <a href="{{url('/')}}"><img src="{{$setting->logo ? assetPath($setting->image->path) : assetPath('website/images/menu-logo.png')}}" alt=""></a>
            <div class="red"></div>
        </div>
        <!--Main Menu HTML Code-->
        <nav class="wsmenu clearfix">
            <ul class="wsmenu-list">
                <li aria-haspopup="true">
                    <a href="{{url('/')}}" class="{{Request::is('/') ? 'active' : ''}} menuhomeicon"> الرئيسية</a>
                </li>
                <li aria-haspopup="true"><a href="{{url('about')}}" class="{{Request::is('about') ? 'active' : ''}} menuhomeicon">
                        من نحن</a>
                </li>
                <li aria-haspopup="true"><a href="#">خدماتنا <span class="wsarrow"></span></a>
                    <ul class="sub-menu">
                        @if($service)
                            @foreach($service as $serviceItem)
                                <li aria-haspopup="true">
                                    <a href="{{url('service-details/' . $serviceItem->id)}}"><i class="fa fa-angle-right"></i>
                                        {{$serviceItem->{'service_'.currentLang()}->title }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                        {{--<li aria-haspopup="true"><a href="details.html"><i class="fa fa-angle-right"></i>
                                تجميل الاسنان
                            </a></li>
                        <li aria-haspopup="true"><a href="details.html"><i class="fa fa-angle-right"></i>
                                تبييض الاسنان
                            </a></li>
                        <li aria-haspopup="true"><a href="details.html"><i class="fa fa-angle-right"></i>
                                تقويم الاسنان
                            </a></li>
                        <li aria-haspopup="true"><a href="details.html"><i class="fa fa-angle-right"></i>
                                زراعة الاسنان
                            </a></li>
                        <li aria-haspopup="true"><a href="details.html"><i class="fa fa-angle-right"></i>
                                علاج الجذور
                            </a></li>
                        <li aria-haspopup="true"><a href="details.html"><i class="fa fa-angle-right"></i>
                                تركبيات تجميلية ثابتة
                            </a></li>
                        <li aria-haspopup="true"><a href="details.html"><i class="fa fa-angle-right"></i>
                                تركيبات متحركة
                            </a></li>
                        <li aria-haspopup="true"><a href="details.html"><i class="fa fa-angle-right"></i>
                                جراحة الوجه والفكين
                            </a></li>--}}
                        <!-- <li aria-haspopup="true"><a href="prodect.html"><i class="fa fa-angle-right"></i>
                            غراء
                          </a></li> -->
                    </ul>
                </li>

                <li aria-haspopup="true">
                    <a href="{{url('gallery')}}" class="{{Request::is('gallery') ? 'active' : ''}} menuhomeicon">
                        معرض الصور
                    </a>
                </li>
                <li aria-haspopup="true">
                    <a href="{{url('video')}}" class="{{Request::is('video') ? 'active' : ''}} menuhomeicon">
                        الفديو
                    </a>
                </li>
                <!-- <li aria-haspopup="true">
                  <a href="careers.html" class=" menuhomeicon">
                    الوظائف
                  </a>
                </li> -->
                <li aria-haspopup="true">
                    <a href="{{url('contact')}}" class="{{Request::is('contact') ? 'active' : ''}} menuhomeicon">
                        اتصل بنا
                    </a>
                </li>
            </ul>
        </nav>
        <!--Menu HTML Code-->
    </div>
</div>
<!-- =========== end navbar =========== -->
