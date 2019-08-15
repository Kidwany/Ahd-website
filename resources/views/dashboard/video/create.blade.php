@extends('dashboard.layouts.layouts')
@section('title', 'Dashboard')
{{--Drop Your Customized Style Codes Here--}}
@section('customizedStyle')
@endsection
{{--Drop Your Customized Scripts Codes Here--}}
@section('customizedScript')
    <script>
        //Initialize Select2 Elements
        $('.select2').select2()
    </script>
@endsection
{{-- Start of page Content --}}
@section('content')

    <section class="content-header">
        <h1>
            Video
            <small>New Videos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{adminUrl('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{adminUrl('/video')}}">Video</a></li>
            <li class="active">Create Video</li>
        </ol>
    </section>


    <section class="content">
        @include('dashboard.layouts.messages')
        <form role="form" action="{{route('video.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('post')
            <div class="row">
                <!-- English Side -->
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Video Info</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1">Video Name</label>
                                    <input type="text" class="form-control" name="video_name" id="exampleInputEmail1" placeholder="Enter Video Name" value="{{old('video_name')}}">
                                    <p class="help-block">Enter Video Name </p>
                                </div>

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1">Video Url</label>
                                    <input type="text" class="form-control" name="video_url" id="exampleInputEmail1" placeholder="Enter Video URL" value="{{old('video_url')}}">
                                    <p class="help-block">Enter Video Embedding Url</p>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection
