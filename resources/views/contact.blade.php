@extends('layouts.app')

@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header pb-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <h1 class="display-3 text-white mb-5 animated slideInDown text-center pb-5">Nous contacter</h1>

        <div class="container pb-5  text-center">
            <div class="py-5"></div>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Addresse</p>
                            <h5 class="mb-0">BP 20, Gourcy, Burkina Faso</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Appelez-nous maintenant</p>
                            <h5 class="mb-0">+226 73-88-59-09</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Envoyez-nous un mail maintenant</p>
                            <h5 class="mb-0">info@amrburkina.org</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-5">
                        <p class="d-inline-block border rounded-pill py-1 px-4">Contactez nous</p>
                        <h1 class="mb-4">Besoin d'informations ? Alors contactez-nous</h1>
                        <!--p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p-->
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Nom et prénom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Sujet</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="rounded w-100 h-100"
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0" src="https://maps.google.com/maps?q=AMR,%20Gourcy&t=k&z=17&ie=UTF8&iwloc=&output=embed">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
