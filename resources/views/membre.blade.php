@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $datas['title'] }}</h1>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <i class="bi {{ $datas['class'] }} display-1 text-primary"></i>
                    <!--h1 class="display-1">{{ $datas['title'] }}</h1-->
                    <h1 class="mb-5">Les membres de l'AMR</h1>
                    <p class="mb-4">{!! $datas['content'] !!}</p>
                    <!--a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a-->
                </div>
            </div>
            <div class="row g-4">
                @php
                    $membres = App\Models\Agent::where(['is_delete' => false, 'type' => 'membre'])->get();
                @endphp
                @foreach ($membres as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img width="100%" class="img-fluid" src="{{ asset($item->image) }}"
                                    alt="">
                            </div>
                            <div class="team-text bg-light text-center p-2">
                                <h5 class="fs-6">{{$item->nom}}</h5>
                                <p class="text-primary fw-bold">{{$item->post_occupe}}</p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- 404 End -->
@endsection
