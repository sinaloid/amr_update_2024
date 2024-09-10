@extends('layouts.dashbord')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Générateur de fichier pdf</h1>
        <p class="mb-3">Choisissez le type de fichier à générer et renseigner les données</p>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    <select class="form-select text-uppercase">
                        <option value="">Sélectionnez le type de fichier</option>
                        <option value="FORMULAIRE PROFIL DES PARTICIPANTS">FORMULAIRE PROFIL DES PARTICIPANTS</option>
                        <option value="CONTRAT DE TRAVAIL A DUREE DETERMINEE HOMME">CONTRAT DE TRAVAIL A DUREE DETERMINEE
                            HOMME</option>
                        <option value="CONTRAT DE TRAVAIL A DUREE INDETERMINEE HOMME">CONTRAT DE TRAVAIL A DUREE
                            INDETERMINEE HOMME</option>
                        <option value="CONTRAT DE TRAVAIL A DUREE DETERMINEE FEMME">CONTRAT DE TRAVAIL A DUREE DETERMINEE
                            FEMME</option>
                        <option value="CONTRAT DE TRAVAIL A DUREE INDETERMINEE FEMME">CONTRAT DE TRAVAIL A DUREE
                            INDETERMINEE FEMME</option>
                        <option value="PROCES VERBAL DE RECEPTION D’ARTICLE">PROCES VERBAL DE RECEPTION D’ARTICLE</option>
                        <option value="PROCES VERBAL DE SELECTION D’UN FOURNISSEUR">PROCES VERBAL DE SELECTION D’UN
                            FOURNISSEUR</option>
                        <option value="LETTRE DE COMMANDE">LETTRE DE COMMANDE</option>
                        <option value="CONTRAT DE STAGE">CONTRAT DE STAGE</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-1 d-flex">
                <h6 class="d-inline-block font-weight-bold text-primary py-2" id="title">Liste des fichiers</h6>
            </div>
            <div class="card-body">
                <form class="row" method="POST" action="{{route('fichier.store')}}">
                    @csrf
                    @include('dashboard.fichier.formulaire_participant')
                </form>
            </div>
        </div>
        <div class="modal fade" id="create">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Ajout d'une consommation</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body mb-3">
                        <form action="{{ route('fichier.store') }}" method="POST">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="destination" class="form-label">Destination:</label>
                                <input type="text" class="form-control" id="destination"
                                    placeholder="Entrer le nom de la destination" name="destination">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="distance_aller_retour" class="form-label">Distance aller/retour Gourcy:</label>
                                <input type="text" class="form-control" id="distance_aller_retour"
                                    placeholder="Entrer la distance aller/retour" name="distance_aller_retour">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="distance_interne" class="form-label">Distance interne:</label>
                                <input type="text" class="form-control" id="distance_interne"
                                    placeholder="Entrer la distance interne" name="distance_interne">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="cout_au_km" class="form-label">Coût au klm:</label>
                                <input type="text" class="form-control" id="cout_au_km"
                                    placeholder="Entrer la distance interne" name="cout_au_km">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="estimation_du_cout" class="form-label">Estimation coûts CFA:</label>
                                <input type="text" class="form-control" id="estimation_du_cout"
                                    placeholder="Entrer la distance interne" name="estimation_du_cout">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="date_sortie" class="form-label">Date de sortie:</label>
                                <input type="date" class="form-control" id="date_sortie"
                                    placeholder="Entrer la distance interne" name="date_sortie">
                            </div>
                            <div class="mb-3">
                                <label for="date_retour" class="form-label">Date de retour:</label>
                                <input type="date" class="form-control" id="date_retour" name="date_retour">
                            </div>
                            <div class="mb-3">
                                <label for="observation" class="form-label">observation:</label>
                                <textarea class="form-control" id="observation" name="observation" id="" cols="30" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Ajouter</button>
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
