@extends('layouts.app')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-4">Association Monde Rural</h1>
                <p class="text-center text-white fw-bold mb-3">L’A.M.R., pour un monde
                    Juste, Equitable et Meilleur !
                </p>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">27</h2>
                            <p class="text-light mb-0">Ans d'existence</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
                            <p class="text-light mb-0">Membres</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">1235</h2>
                            <p class="text-light mb-0">Réalisations</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">135</h2>
                            <p class="text-light mb-0">Partenaires(bénéficiaires)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Cardiology</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Neurology</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{ asset('assets/img/carousel-3.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Pulmonary</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{ asset('assets/img/carousel/13.jpg') }}"
                            alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Pulmonary</h1-->
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img height="20px" class="img-fluid" src="{{ asset('assets/img/carousel/17.jpg') }}"
                            alt="">
                        <div class="owl-carousel-text">
                            <!--h1 class="display-1 text-white mb-0">Pulmonary</h1-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('assets/img/about-1.jpg') }}"
                            alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ asset('assets/img/about-2.jpg') }}"
                            alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">À propos</p>
                    <h1 class="mb-4">Qui sommes nous ?</h1>
                    <p class="mb-4 text-justify">
                        L’Association Monde Rural est une association apolitique, non confessionnelle
                        et à but non lucratif régi par la loi <span class="fw-bold">n 064-2015 CNT du 20 octobre
                            2015</span>. <br>
                        Elle a été enregistrée sous le numéro <span class="fw-bold">n 000000135701 du 17 mars 2017</span>.
                        <br>
                        Son siège social se trouve à Gourcy dans la province du Zondoma au Burkina Faso. <br>
                        Depuis 1996, elle œuvre auprès des populations rurales et intervient dans plusieurs domaines
                        d’activités à savoir:

                    </p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>La gouvernance locale, de la décentralisation et
                        des droits humains (GovLoc)</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Le genre et l’inclusion sociale (Santé
                        communautaire – ANJE- / Empowerment des femmes, entreprenariat des jeunes) (G.I.S.)</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Les systèmes alimentaires durables
                        (agroécologie, foncier, environnement et changements climatiques ; plaidoyer pour la nutrition et le
                        WASH) (S.A.D.)</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>L’humanitaire, l’urgences et la cohésion sociale
                        (Do No Harm, Leaving No One Behind) (H.U.CO.S.)</p>
                    @guest
                        <button class="btn btn-primary rounded-pill py-3 px-5 mt-3" data-bs-target="#adhesionForm"
                            data-bs-toggle="modal">Devenir Membre</button>
                    @endguest
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Partners Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Nos Partenaires Techniques et Financiers</p>
                <h1>Ils nous font confiance</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @php
                    $partenaires = App\Models\Partenaire::where('is_delete', false)->get();
                @endphp
                @foreach ($partenaires as $item)
                    <div class="testimonial-item text-center">
                        <img class="img-fluid mx-auto mb-4" src="{{ asset($item->image) }}"
                            style="width: 200px; height: 200px;">
                        <div class="testimonial-text rounded text-center p-4">
                            
                            <p>
                                {!! $item->description !!}
                            </p>
                            <!--h5 class="mb-1">{{ $item->nom }}</h5-->
                            <!--span class="fst-italic">Profession</span-->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Parteners End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Thématiques</p>
                <h1>Nos domaines d'interventions</h1>
            </div>
            <div class="row g-4">
                @php
                    $thematiques = App\Models\Thematique::where('is_delete', false)->get();
                @endphp
                @foreach ($thematiques as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="bi bi-people-fill text-primary fs-4"></i>
                            </div>
                            <p class="mb-4 fw-bold">{{$item->abreviation}}</p>
                            <h4 class="mb-3">{{$item->nom}}
                            </h4>
                            <a class="btn" href="{{ route('thematiquesShow', $item->slug) }}"><i
                                    class="fa fa-plus text-primary me-3"></i>Lire plus</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <!--p class="d-inline-block border rounded-pill text-light py-1 px-4">Nos Valeurs</p-->
                        <h1 class="text-white mb-4">Nos valeurs</h1>
                        <p class="text-white mb-4 pb-2">
                            AMR travailler avec et aux côtés des populations burkinabé pour le respect et la protection de
                            leur dignité.
                        </p>
                        <div class="row g-4">
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="bi bi-briefcase-fill text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Travail</p>
                                        <h5 class="text-white mb-0">Professionnel</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Toujours</p>
                                        <h5 class="text-white mb-0">Engagé</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="bi bi-briefcase-fill text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Travail avec</p>
                                        <h5 class="text-white mb-0">Intégrité </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="fa fa-brain text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Esprit</p>
                                        <h5 class="text-white mb-0">Innovant & Dynamique</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                                                                        <div class="position-relative h-100">
                                                                            <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/img/amr-action.jpg') }}" style="object-fit: cover;" alt="">
                                                                        </div>
                                                                    </div-->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="owl-carousel header-carousel" style="max-height: 500px;">
                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100"
                                src="{{ asset('assets/img/carousel/14.jpg') }}" style="object-fit: cover;"
                                alt="">
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100"
                                src="{{ asset('assets/img/carousel/4.jpg') }}" style="object-fit: cover;"
                                alt="">
                        </div>

                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100"
                                src="{{ asset('assets/img/carousel/6.jpg') }}" style="object-fit: cover;"
                                alt="">
                        </div>

                        <div class="owl-carousel-item position-relative">
                            <img height="20px" class="img-fluid w-100 h-100"
                                src="{{ asset('assets/img/carousel/8.jpg') }}" style="object-fit: cover;"
                                alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Membres</p>
                <h1>Les membres de l'AMR</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/team-1.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-2">
                            <h5 class="fs-6">WANGRE Amadou</h5>
                            <p class="text-primary fw-bold">Coordonnateur <br> National</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/team-2.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-2">
                            <h5 class="fs-6">SAMANDOULOUGOU Lockre Célestin</h5>
                            <p class="text-primary fw-bold">Président du Conseil <br> d’Administration</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/team-3.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-2">
                            <h5 class="fs-6">Kiemde Abdoul Aziz</h5>
                            <p class="text-primary fw-bold">
                                Coordonnateur Provincial du Zondoma
                            </p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/team-4.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-2">
                            <h5 class="fs-6">LOMPO Alassane</h5>
                            <p class="text-primary fw-bold">Coordonnateur Provincial du Gourma</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Agents</p>
                <h1>Les agents de l'AMR</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @php
                    $agents = App\Models\Agent::where([
                        'is_delete' => false,
                        'type' => 'agent',
                    ])->get();
                @endphp
                @foreach ($agents as $item)
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{ asset($item->image) }}"
                            style="width: 200px; height: 200px;">
                        <div class="testimonial-text rounded text-center p-4">
                            <p>
                                {!! $item->description !!}
                            </p>
                            <h5 class="mb-1">{{ $item->nom }}</h5>
                            <span class="fst-italic">{{ $item->post_occupe }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Contacts</p>
                    <h1 class="mb-4">Besoin d'informations ? Alors contactez-nous</h1>

                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Appelez-nous maintenant</p>
                            <h5 class="mb-0">+226 73-88-59-09 / 67-36-78-27</h5>
                            <h5 class="mb-0">+226 70-84-01-89 / 67-36-76-51</h5>
                            <h5 class="mb-0">+226 03-16-02-04</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Envoyez-nous un mail maintenant</p>
                            <h5 class="mb-0">info@amrburkina.org</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Nom et Prénom"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control border-0" placeholder="Téléphone"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" placeholder="Entrer votre commentaire"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
@endsection
