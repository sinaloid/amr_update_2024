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
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <i class="bi {{$datas['class']}} display-1 text-primary"></i>
                    <!--h1 class="display-1">{{$datas['title']}}</h1-->
                    <h1 class="mb-4">{{$datas['title']}}</h1>
                    <p class="mb-4">{!! $datas['content'] !!}</p>
                    <!--a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a-->
                    <p class="">
                        <img width="100%" src="{{asset('assets/img/valeurs.png')}}" alt="">
                    </p>
                    <div class="text-justify">
                        <ul>
                            <li>
                                <h2>L’engagement et l’autonomie</h2>
                                <ul>
                                    <li>
                                        <span class="fw-bold">L’engagement</span>
                                        <p>
                                            Les membres et le personnel animés d’une ferme volonté de changer les attitudes
                                            « négatives » et conscients des effets néfastes des mauvaises pratiques s’engagent
                                            aux côtés des communautés pour faire d’elles leur propre acteurs de développement.
                                        </p>
                                    </li>
                                    <li>
                                        <span class="fw-bold">L’autonomie des communautés</span>
                                        <p>
                                            Les membres et le personnel valorisent les savoirs et les savoirs faires des communautés
                                             dans un esprit de complémentarité, d’échange et de partage des bonnes pratiques en vue
                                             de renforcer leur confiance en soi pour leur autonomie.
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h2>La citoyenneté et la responsabilité</h2>
                                <ul>
                                    <li>
                                        <span class="fw-bold">La citoyenneté</span>
                                        <p>
                                            Cette valeur envisagée par AMR vise à créer les conditions nécessaires pour
                                            l’expression d’une citoyenneté effective dans le respect de la dignité de l’homme,
                                            des droits de l’homme et des devoirs, de sorte à favoriser la participation active
                                            de chaque citoyen et citoyenne à la vie de la communauté de manière égalitaire
                                            et sans discrimination.
                                        </p>
                                    </li>
                                    <li>
                                        <span class="fw-bold">La responsabilité du membre, de l’agent et du bénéficiaire dans l’action</span>
                                        <p>
                                            Les membres, les agents et les bénéficiaire des interventions sont parties prenantes
                                            dans l’identification, la mise en œuvre et le suivi évaluation. Chaque acteur conscient
                                            de son rôle le joue efficacement et en assume entièrement les résultats.
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h2>La redevabilité et la solidarité</h2>
                                <ul>
                                    <li>
                                        <span class="fw-bold">La redevabilité</span>
                                        <p>
                                            Cette valeur envisagée par AMR vise à créer les conditions nécessaires pour
                                            l’expression d’une citoyenneté effective dans le respect de la dignité de l’homme,
                                            des droits de l’homme et des devoirs, de sorte à favoriser la participation active
                                            de chaque citoyen et citoyenne à la vie de la communauté de manière égalitaire
                                            et sans discrimination.
                                        </p>
                                    </li>
                                    <li>
                                        <span class="fw-bold">La solidarité pour le développement</span>
                                        <p>
                                            AMR est consciente que le développement ne peut être l’œuvre d’elle seul et s’engage
                                            à travailler et à développer des partenariats afin d’accompagner et de soutenir les
                                            communautés vivant dans l’extrême pauvreté avec un accent particulier sur les jeunes,
                                            (y compris les enfants); les femmes et les personnes vivant avec un handicap sans
                                            distinction de race, de religion et d’origine ethnique.
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
@endsection
