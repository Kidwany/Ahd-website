@extends('website.layouts.layouts')
@section('title',  'الخدمات ')
@section('content')

    <div class="top-slidpage">
        <h3> معرض الصور</h3>
    </div>
    <!-- =====top slid-page ===== -->

    <!-- =====start about ===== -->
    <div class="pag-gall">
        <div class="container">
            <div class="bar-hed text-center ">
                <h3>معرض الصور</h3>
                <i class="lef fas fa-tooth"></i>
                <i class="minus fas fa-minus"></i>
                <i class="compress fas fa-th-large"></i>
                <i class="minus fas fa-minus"></i>
                <i class="rig fas fa-tooth"></i>
            </div>
            <div class="container py-4">

                <div class="row">
                    <div class="col-12">
                        <!-- gallery class need for using gallery -->
                        <div class="card-columns gallery">
                            <!-- need a div for contains img tag -->
                            @foreach($images as $image)
                                <div class="galleryItem card box-gallery">
                                    <!-- just need a img tag. if you are want a text add data-text-->
                                    <img class="card-img-top" src="{{assetPath($image->image->path)}}">
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end about-us ------------------------------------ -->


@endsection
