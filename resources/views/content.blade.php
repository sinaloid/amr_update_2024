@extends('layouts.app')
@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header pb-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <h1 class="display-3 text-white mb-5 animated slideInDown text-center pb-5">{{$datas['title']}}</h1>

        <div class="container pb-5  text-center">
            <div class="py-5"></div>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container ">
            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <p class="text-center"><i class="bi {{$datas['class']}} display-1 text-primary"></i></p>
                    <!--h1 class="display-1">{{$datas['title']}}</h1-->
                    <h1 class="mb-4 text-center">{{$datas['title']}}</h1>
                    <p class="mb-4 text-left">{!! $datas['content'] !!}</p>
                    <!--a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a-->
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
@endsection
