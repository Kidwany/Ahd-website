@extends('website.layouts.layouts')
@section('title',  'الخدمات ')
@section('content')


    <!-- =====top slid-page ===== -->
    <div class="top-slidpage">
        <h3> تفاصيل الخدمة</h3>
    </div>
    <!-- =====top slid-page ===== -->

    <!-- =====details-processes ===== -->
        <div class="details-processes sections">
            <div class="container">
                <div class="bar-hed text-center ">
                    <h3>تفاصيل الخدمة </h3>
                    <i class="minus fas fa-minus"></i>
                    <i class="compress fas fa-bezier-curve"></i>
                    <i class="minus fas fa-minus"></i>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="info-details-processes">
                            <h4>{{$serviceSingle->{'service_'.currentLang()}->title }} </h4>
                            <p>
                                {{$serviceSingle->{'service_'.currentLang()}->description }}


                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="img-details-processes">
                            <img src="{{assetPath($serviceSingle->image->path)}}" alt="">
                        </div>
                    </div>

                   {{-- <div class="info-details-processes">
                        <h4>طرق تجميل الأسنان </h4>
                        <ul>
                            <li><i class="fas fa-bullseye"></i> العدسات اللاصقة أو كما تسمى اللومينز .</li>
                            <li><i class="fas fa-bullseye"></i> الفينير.</li>
                            <li><i class="fas fa-bullseye"></i> كما أنها لا تسبب ألماً للمريض لذا ليس هنالك داعٍ</li>

                        </ul>
                        <h4>متى تلجأ إلى عمليات تجميل الأسنان؟ :</h4>
                        <ul>
                            <li><i class="fas fa-bullseye"></i>مشاكل اللثة</li>
                            <li><i class="fas fa-bullseye"></i>تجميل الأسنان</li>
                            <li><i class="fas fa-bullseye"></i>تبييض الأسنان </li>


                        </ul>
                        <h4>متى ظهرت عمليات تجميل الأسنان؟ : </h4>
                        <p>
                            لم تظهر عمليات تجميل الأسنان مرة واحدة، وإنما ظهرت واحدة تلو الأخرى، وتعتبر عملية تقويم
                            الأسنان أولى عمليات التجميل التي تم اكتشافها منذ أكثر من 1000 عام قبل الميلاد، حيث تم
                            العثور على بعض الوثائق التي تدل على وجود محاولات لتقويم الأسنان في العصور اليونانية
                            والفرعونية والإترورية.
                        </p>
                    </div>--}}
                </div>

            </div>
        </div>
        <!-- =====details-processes ===== -->



@endsection
