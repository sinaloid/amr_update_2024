@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Nos success stories</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                @php
                    $datas = App\Models\ActionAndStory::where([
                        'is_delete' => false,
                        'type' => 'story'
                    ])->get();
                @endphp
                <div class="col-lg-6 wow fadeIn p-0" data-wow-delay="0.1s">
                    @if (count($datas) !== 0)
                        <div class="d-flex flex-column">
                            <img class="img-fluid rounded align-self-end img-max-h" src="{{ asset($datas[0]->image) }}"
                                alt="">
                        </div>
                        <div class="py-2">
                            <a href="{{ route('actionDetail', $datas[0]->slug) }}" class="fw-bold fs-20 text-link">
                                {{ $datas[0]->nom }}
                            </a>
                        </div>
                    @endif

                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">

                    <p class="d-inline-block border rounded-pill py-1 px-4">Nos success stories</p>
                    @foreach ($datas as $item)
                        <div class="d-flex mb-3">
                            <img class="img-carre rounded me-2" src="{{ asset($item->image) }}" alt="">

                            <div class="w-100">
                                <div class="fw-bold text-justify fs-18">
                                    <a href="{{ route('actionDetail', $item->slug) }}" class="fw-bold fs-20 text-link">
                                        {{ $item->nom }}
                                    </a>
                                </div>
                                <div class="d-flex fs-14">
                                    <span class="me-auto">Publier le : {{ $item->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--div class="d-flex">
                        <a class="ms-auto" href="#">Voir toutes les actualités<i
                                class="fa fa-arrow-right ms-3"></i></a>
                    </div-->
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row my-3">
                <div class="col-12 p-0 m-0">
                    <!--p class="d-inline-block border rounded-pill py-1 px-4">
                        Droits Humains, cohésion sociale, décentralisation et gouvernance locale
                    </p-->
                    <p class="d-inline-block border rounded-pill py-1 px-4">
                        Nos anciennes success stories
                    </p>
                </div>
            </div>
            <div class="row row-cols-lg-2 g-5">
                @foreach ($datas as $item)
                    <div class="col-lg-6 wow fadeIn p-0" data-wow-delay="0.1s">
                        <div class="d-flex mb-3 px-3">
                            <img class="img-carre rounded me-2" src="{{ asset($item->image) }}" alt="">

                            <div class="w-100">
                                <div class="fw-bold text-justify fs-18">
                                    <a href="{{ route('detailActualite', $item->slug) }}" class="fw-bold fs-20 text-link">
                                        {{ $item->nom }}
                                    </a>
                                </div>
                                <div class="d-flex fs-14">
                                    <span class="me-auto">Publier le : {{ $item->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About End -->



    <!--div class="container-fluid mt-3 bg-primary text-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn p-0" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded align-self-end img-max-h" src="{{ asset('assets/img/about-1.jpg') }}"
                            alt="">
                    </div>
                    <div class="py-2">
                        <a href="#" class="fw-bold text-white">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus tempora veritatis,
                            tenetur exercitationem doloremque modi molestiae soluta minima natus, corporis vero nemo est
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">

                    <p class="d-inline-block border rounded-pill py-1 px-4">Systèmes alimentaires durables</p>
                    @foreach ([1, 2, 3] as $item)
                        <div class="d-flex mb-3">
                            <img class="img-carre rounded me-2" src="{{ asset('assets/img/about-1.jpg') }}" alt="">

                            <div>
                                <span class="fw-bold">Titre de l'actualité</span>
                                <p class="text-container">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat architecto beatae iure
                                    sint
                                    accusantium. Sed ullam eveniet doloremque tempore consequatur sint...
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex">
                        <a class="ms-auto text-white" href="#">Voir toutes les actualités<i
                                class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row mt-3">
                <div class="col-12 p-0 m-0">
                    <p class="d-inline-block border rounded-pill py-1 px-4">
                        Axes Transversaux
                    </p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn p-0" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/about-1.jpg') }}"
                                alt=""><br />
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus tempora
                                veritatis,
                            </span>
                        </div>
                        <div class="col">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/about-1.jpg') }}"
                                alt=""><br />
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus tempora
                                veritatis,
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">

                    @foreach ([1, 2, 3] as $item)
                        <div class="d-flex mb-3">
                            <img class="img-carre rounded me-2" src="{{ asset('assets/img/about-1.jpg') }}"
                                alt="">

                            <div>
                                <span class="fw-bold">Titre de l'actualité</span>
                                <p class="text-container">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat architecto beatae iure
                                    sint
                                    accusantium. Sed ullam eveniet doloremque tempore consequatur sint...
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex">
                        <a class="ms-auto" href="#">Voir toutes les actualités<i
                                class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row my-3">
                <div class="col-12 p-0 m-0">
                    <p class="d-inline-block border rounded-pill py-1 px-4">
                        La promotion de l’autonomisation politique et économique de la femme et du jeune et la santé de
                        l’enfant
                    </p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 wow fadeIn p-0" data-wow-delay="0.1s">
                    <div class="row row-cols-md-4">
                        @foreach ([1, 2, 3, 1, 4, 4, 4, 4] as $item)
                            <div class="col mb-4">
                                <img class="img-fluid rounded" src="{{ asset('assets/img/about-1.jpg') }}"
                                    alt=""><br />
                                <span class="fw-bold">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus tempora
                                    veritatis,
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div-->
@endsection
