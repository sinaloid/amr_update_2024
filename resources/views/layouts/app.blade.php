<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>AMR - Association Monde Rural</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    @notifyCss
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('script')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Changement...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>BP 20, Gourcy, BURKINA FASO</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Lun - Ven : 07H30 - 17H30 et Sam : 08H00 - 10H30</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>(226) 73-88-59-09 / 67-36-78-27</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a href="https://facebook.com/profile.php?id=100071054985790"
                        class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1"
                        href="https://www.linkedin.com/in/amr-burkina-110a2b261/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn fixed-top"
        data-wow-delay="0.1s">
        <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary">
                <img class="logo" height="48px" src="{{ asset('assets/img/logo.png') }}" alt="AMR">
                <span class="d-inline-block align-middle">AMR</span>
            </h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('index') }}"
                    class="nav-item nav-link @if (Route::currentRouteName() == 'index') active @endif">Accueil</a>
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle
                    @if (Route::currentRouteName() == 'visions' ||
                            Route::currentRouteName() == 'valeurs' ||
                            Route::currentRouteName() == 'missions' ||
                            Route::currentRouteName() == 'objectifs' ||
                            Route::currentRouteName() == 'organisation' ||
                            Route::currentRouteName() == 'membres' ||
                            Route::currentRouteName() == 'apropos' ||
                            Route::currentRouteName() == 'equipes') active @endif"
                        data-bs-toggle="dropdown">Présentation</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0 bg-light">
                        <a href="{{ route('visions') }}" class="dropdown-item">Vision</a>
                        <a href="{{ route('valeurs') }}" class="dropdown-item">Valeurs</a>
                        <a href="{{ route('missions') }}" class="dropdown-item">Mission</a>
                        <a href="{{ route('objectifs') }}" class="dropdown-item">Objectifs</a>
                        <a href="{{ route('organisation') }}" class="dropdown-item">Organisation</a>
                        <a href="{{ route('lesmembres') }}" class="dropdown-item">Les membres</a>
                        <a href="{{ route('equipes') }}" class="dropdown-item">Equipe opérationnelle</a>
                        <a href="{{ route('apropos') }}" class="dropdown-item">À propos</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle
                    @if (Route::currentRouteName() == 'thematiques-detail') active @endif"
                        data-bs-toggle="dropdown">Thématiques</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0 bg-light">
                        @php
                            $thematiques = App\Models\Thematique::where('is_delete', false)->get();
                        @endphp
                        @foreach ($thematiques as $item)
                            <a href="{{ route('thematiquesShow', $item->slug) }}"
                                class="dropdown-item">{{ $item->abreviation }}</a>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('allActualite') }}"
                    class="nav-item nav-link @if (Route::currentRouteName() == 'allActualite') active @endif">Actualités</a>
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle
                        @if (Route::currentRouteName() == 'thematiques-detail') active @endif"
                        data-bs-toggle="dropdown">Actions & Stories</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0 bg-light">
                        <a href="{{ route('thematiquesShow', $item->slug) }}" class="dropdown-item">Nos actions</a>
                        <a href="{{ route('thematiquesShow', $item->slug) }}" class="dropdown-item">Success
                            stories</a>

                    </div>
                </div>
                <a href="{{ route('contact') }}"
                    class="nav-item nav-link @if (Route::currentRouteName() == 'contact') active @endif">Contact</a>
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}"
                            class="nav-item nav-link @if (Route::currentRouteName() == 'login') active @endif">Connexion</a>
                    @endif

                    @if (Route::has('register'))
                        <!--a class="nav-item nav-link" href="{{ route('register') }}">{{ __('Register') }}</a-->
                    @endif
                @else
                    <a href="{{ route('actualite.index') }}" class="nav-item nav-link">Compte</a>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nom . ' ' . Auth::user()->prenom }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end bg-light" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Déconnection
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </div>
            @guest
                <button class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" data-bs-target="#adhesionForm"
                    data-bs-toggle="modal">Devenir Membre<i class="fa fa-arrow-right ms-3"></i></button>
            @endguest
        </div>
    </nav>
    <div class="fixed-top">
        @include('notify.components.notify')
        <x:notify-messages />
    </div>
    <!-- Navbar End -->
    @yield('content')

    <div class="container-fluid">
        <div class="modal fade" id="adhesionForm">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Devenir membre</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body mb-3">
                        Pour nous rejoindre en tant que membre, n'hésitez pas à nous envoyer un courriel à l'adresse
                        <a class="fw-bold text-primary" href="mailto:info@amrburkina.org">info@amrburkina.org</a> ou à
                        nous appeler directement au
                        <a class="fw-bold text-primary" href="tel:+22673885909">+226 73 88 59 09</a> ou au
                        <a class="fw-bold text-primary" href="tel:+22667367827">+226 67 36 78 27</a>
                        . Nous serons ravis de vous accueillir dans notre communauté.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4">Addresse</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>BP 20, Gourcy, Burkina Faso</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+226 73-88-59-09 / 67-36-78-27</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@amrburkina.org</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Thématiques</h5>
                    @foreach ($thematiques as $item)
                        <a class="btn btn-link"
                            href="{{ route('thematiquesShow', $item->slug) }}">{{ $item->nom }}</a>
                    @endforeach
                </div>







                <div class="col-lg-2 col-md-6">
                    <h5 class="text-light mb-4">Liens rapides</h5>
                    <a class="btn btn-link" href="">Présentation</a>
                    <a class="btn btn-link" href="">Nos Actions</a>
                    <a class="btn btn-link" href="">Contacts</a>
                    <a class="btn btn-link" href="">À propos</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Abonnez-vous pour ne rien manquer des actualités de l'AMR</p>
                    <form action="{{ route('newsletters.store') }}" method="POST" class="position-relative mx-auto"
                        style="max-width: 400px;">
                        @csrf
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Votre email" name="email">
                        <button type="submit" class="btn btn-primary  mt-2 me-2">Souscrire</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">AMR</a>, Tous Droits Réservés.
                    </div>
                    <!--div class="col-md-6 text-center text-md-end">
                        Designed By <a class="border-bottom" href="#">Sinaloid</a>
                    </div-->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    @notifyJs
    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
