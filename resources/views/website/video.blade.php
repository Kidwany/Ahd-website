@extends('website.layouts.layouts')
@section('title',  'الفيديو ')
@section('content')

    <!-- =====top slid-page ===== -->
    <div class="top-slidpage">
        <h3>فيديو </h3>
    </div>
    <!-- =====top slid-page ===== -->
    <!-- =====careers ===== -->
    <div class="video-page">
        <div class="container">
            <div class="bar-hed text-center ">
                <h3> فيديو </h3>
                <i class="lef fas fa-tooth"></i>
                <i class="minus fas fa-minus"></i>
                <i class="compress fas fa-th-large"></i>
                <i class="minus fas fa-minus"></i>
                <i class="rig fas fa-tooth"></i>
            </div>
            <div class="row">

                @foreach($videos as $video)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="video-box">
                            <iframe width="100%" height="190" src="{{$video->video_url}}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- =====careers ===== -->


@endsection
