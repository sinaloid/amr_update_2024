@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header pb-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <h1 class="display-3 text-white mb-5 animated slideInDown text-center pb-5">À propos</h1>

        <div class="container pb-5  text-center">
            <div class="py-5"></div>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('assets/img/about-1.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Notre histoire</p>
                    <h1 class="mb-4">L’<span class="text-primary"> A.M.R</span>., pour un monde Juste, Equitable et Meilleur !</h1>
                    <p class="mb-4">
                        Crée en 1996, l’association Monde Rural œuvre à travers ses actions, pour le développement,
                        l’émancipation et l’épanouissement des populations rurales.
                        A travers ses actions de développement local et durable, elle travaille avec et aux côtés des
                        communautés rurales , telle est la mission qu’AMR s’est fixée.

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-1 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Notre mission</p>
                        <h1 class="text-white mb-4 p-lg-4">Travailler avec et aux côtés des populations burkinabè pour le
                            respect et la protection de leur dignité</h1>
                        <!--p class="text-white mb-4 pb-2">
                                Travailler avec et aux côtés des populations burkinabè pour le respect et la protection de leur dignité
                            </p-->
                    </div>
                </div>

                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/img/amr-action.jpg') }}"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
@endsection
