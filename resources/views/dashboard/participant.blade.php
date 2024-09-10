@extends('layouts.dashbord')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Activité : {{ $datas->name }}</h1>
        <p class="mb-4">
            <span class="fw-bold">Date de début : </span><span>{{ $datas->startDate }}</span>
        </p>
        <p class="mb-4">
            <span class="fw-bold">Date de fin : </span><span>{{ $datas->endDate }}</span>
        </p>
        <p class="mb-4">
            <span class="fw-bold">Statut : </span><span>{{ $datas->status }}</span>
        </p>
        <p class="mb-4">
            <span class="fw-bold">Telecharger le fichier associé au projet</span>
        </p>
        <p class="mb-4">{{ $datas->description }}</p>
        <!--div class="mb-2">
                <button class="btn btn-success fw-bold my-2 me-2">Activités terminer</button>
                <button class="btn btn-warning fw-bold my-2 me-2">Activités en cours</button>
                <button class="btn btn-info fw-bold my-2 me-2">Activités à venir</button>
                <button class="btn btn-danger fw-bold my-2 me-2">Activités en suspension</button>
            </div-->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-1 d-flex">
                <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des participants à l'activité</h6>
                <button class="btn btn-primary d-inline-block ms-auto fw-bold" data-bs-toggle="modal"
                    data-bs-target="#create"><i class="bi bi-plus-circle-fill"></i> Ajouter un participant</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom Prénom</th>
                                <th>Organisation</th>
                                <th>Fonction</th>
                                <th>Formation de base</th>
                                <th>Contact</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nom Prénom</th>
                                <th>Organisation</th>
                                <th>Fonction</th>
                                <th>Formation de base</th>
                                <th>Contact</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($datas->participants as $data)
                                @if (!$data->is_delete)
                                    <tr>
                                        <td>{{ $data->lastname." ".$data->firstname }}</td>
                                        <td>{{ $data->organisation }}</td>
                                        <td>{{ $data->fonction }}</td>
                                        <td>{{ $data->formation }}</td>
                                        <td>{{ $data->telephone }}</td>
                                        <!--td>ici on aurra la sommes des cotisation suite à particition atelier de AMR et de PDF</td-->
                                        <td>
                                            <a href="{{ route('participant.show',$data->slug) }}" class="d-inline-block"><i
                                                    class="bi bi-eye-fill"></i></a>
                                            <span class="d-inline-block" data-bs-toggle="modal"
                                                data-bs-target="#update{{ $data->slug }}"><i
                                                    class="bi bi-pencil-square"></i></span>
                                            <form class="d-inline" method="POST"
                                                action="{{ route('participant.destroy', $data->id) }}">
                                                <button type="submit" class="d-inline-block"><i
                                                        class="bi bi-trash"></i></button>
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="update{{ $data->slug }}">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Modification du projet</h4>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body mb-3">
                                                    <form action="{{ route('participant.update',$data->id) }}" method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <input type="text" name="activite_id" value="{{ $datas->id }}" hidden />
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="lastname" class="form-label">Nom:</label>
                                                                <input type="text" class="form-control" id="lastname"
                                                                    placeholder="Entrer le nom du participant" name="lastname" value="{{$data->lastname}}">
                                                            </div>
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="firstname" class="form-label">Prénom:</label>
                                                                <input type="text" class="form-control" id="firstname"
                                                                    placeholder="Entrer le prénom du participant" name="firstname" value="{{$data->firstname}}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="organisation" class="form-label">Organisation:</label>
                                                                <input type="text" class="form-control" id="organisation"
                                                                    placeholder="Entrer le nom de l'organisation" name="organisation" value="{{$data->organisation}}">
                                                            </div>
                            
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="fonction" class="form-label">fonction:</label>
                                                                <input type="text" class="form-control" id="fonction"
                                                                    placeholder="Entrer la fonction du participant" name="fonction" value="{{$data->fonction}}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="formation" class="form-label">Formation:</label>
                                                                <input type="text" class="form-control" id="formation"
                                                                    placeholder="Entrer la formation de base" name="formation" value="{{$data->formation}}">
                                                            </div>
                            
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="telephone" class="form-label">Téléphone:</label>
                                                                <input type="text" class="form-control" id="telephone"
                                                                    placeholder="Entrer le numéro de téléphone" name="telephone" value="{{$data->telephone}}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="whatsapp" class="form-label">Numéro whatsapp:</label>
                                                                <input type="text" class="form-control" id="whatsapp"
                                                                    placeholder="Entrer le numéro whatsapp" name="whatsapp" value="{{$data->whatsapp}}">
                                                            </div>
                            
                            
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="email" class="form-label">Email:</label>
                                                                <input type="text" class="form-control" id="email"
                                                                    placeholder="Entrer l'adresse email" name="email" value="{{$data->email}}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="code_participant" class="form-label">Code du participant (Id unique CNIB à
                                                                    18 chiffres):</label>
                                                                <input type="text" class="form-control" id="code_participant"
                                                                    placeholder="Entrer le numéro NIP" name="code_participant" value="{{$data->code_participant}}">
                                                            </div>
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="region" class="form-label">Région:</label>
                                                                <input type="text" class="form-control" id="region"
                                                                    placeholder="Entrer la region" name="region" value="{{$data->region}}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="province" class="form-label">Province:</label>
                                                                <input type="text" class="form-control" id="province"
                                                                    placeholder="Entrer la province" name="province" value="{{$data->province}}">
                                                            </div>
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="commune" class="form-label">Commune:</label>
                                                                <input type="text" class="form-control" id="commune"
                                                                    placeholder="Entrer la commune" name="commune" value="{{$data->commune}}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="village" class="form-label">Village/Secteur:</label>
                                                                <input type="text" class="form-control" id="village"
                                                                    placeholder="Entrer le village/secteur" name="village" value="{{$data->village}}">
                                                            </div>
                            
                                                            <div class="col-12 col-md-6 mb-3 mt-3">
                                                                <label for="date" class="form-label">Date d’enregistrement :</label>
                                                                <input type="date" class="form-control" id="date" name="date" value="{{$data->date}}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">
                                                                <span class="p-0">Genre</span>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio1" name="gender"
                                                                        value="Homme" checked={{$data->gender === "Homme" ? "1" : "0"}}>Homme
                                                                    <label class="form-check-label" for="radio1"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio2" name="gender"
                                                                        value="Femme" checked={{$data->gender === "Femme" ? "1" : "0"}}>Femme
                                                                    <label class="form-check-label" for="radio2"></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <span class="p-0">Tranche d'âge</span>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio1" name="tranche_age"
                                                                        value="Inférieur ou égale à 35" checked="{{$data->tranche_age === "Inférieur ou égale à 35" ? true : false}}">Inférieur ou égale à 35
                                                                    <label class="form-check-label" for="radio1"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio2" name="tranche_age"
                                                                        value="36 à 50" checked="{{$data->tranche_age === "36 à 50" ? true : false}}">36 à 50
                                                                    <label class="form-check-label" for="radio2"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio2" name="tranche_age"
                                                                        value="Plus de 50" checked="{{$data->tranche_age === "Plus de 50" ? true : false}}">Plus de 50
                                                                    <label class="form-check-label" for="radio2"></label>
                                                                </div>
                                                            </div>
                            
                                                        </div>
                                                        <div class="row border-top mt-3">
                                                            <div class="col-12 col-md-5">
                                                                <span class="p-0">Appartient à un autre groupe minoritaire</span>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio1" name="group_minoritaire"
                                                                        value="Oui" checked="{{$data->group_minoritaire === "Oui" ? true : false}}">Oui
                                                                    <label class="form-check-label" for="radio1"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio2" name="group_minoritaire"
                                                                        value="Non" checked="{{$data->group_minoritaire === "Non" ? true : false}}">Non
                                                                    <label class="form-check-label" for="radio2"></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <span class="p-0">Statut de résidence</span>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio1" name="statut_residence"
                                                                        value="Hôte" checked="{{$data->statut_residence === "Hôte" ? true : false}}">Hôte
                                                                    <label class="form-check-label" for="radio1"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio2" name="statut_residence"
                                                                        value="PDI" checked="{{$data->statut_residence === "PDI" ? true : false}}">PDI
                                                                    <label class="form-check-label" for="radio2"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio2" name="statut_residence"
                                                                        value="Autre" checked="{{$data->statut_residence === "Autre" ? true : false}}">Autre
                                                                    <label class="form-check-label" for="radio2"></label>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row border-top mt-3">
                                                            <div class="col-12 col-md-6">
                                                                <span class="p-0">Handicap</span>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio1" name="handicap"
                                                                        value="Oui" checked="{{$data->handicap === "Oui" ? true : false}}">Oui
                                                                    <label class="form-check-label" for="radio1"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio2" name="handicap"
                                                                        value="Non" checked="{{$data->handicap === "Non" ? true : false}}">Non
                                                                    <label class="form-check-label" for="radio2"></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <span class="p-0">Si handicapé, type de handicap</span>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio1" name="type_handicap"
                                                                        value="Moteur" checked="{{$data->type_handicap === "Moteur" ? true : false}}">Moteur
                                                                    <label class="form-check-label" for="radio1"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio2" name="type_handicap"
                                                                        value="Visuel" checked="{{$data->type_handicap === "Visuel" ? true : false}}">Visuel
                                                                    <label class="form-check-label" for="radio2"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio2" name="type_handicap"
                                                                        value="Handicap auditif" checked="{{$data->type_handicap === "Handicap auditif" ? true : false}}">Handicap auditif
                                                                    <label class="form-check-label" for="radio2"></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="radio2" name="type_handicap"
                                                                        value="Handicap de la parole" checked="{{$data->type_handicap === "Handicap de la parole" ? true : false}}">Handicap de la parole
                                                                    <label class="form-check-label" for="radio2"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">Autres informations sur le participant
                                                                :</label>
                                                            <textarea class="form-control" id="description" name="description" id="" cols="30" rows="3">{{$data->description}}</textarea>
                                                        </div>
                            
                            
                                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="create">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Ajout d'une activité</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body mb-3">
                        <form action="{{ route('participant.store') }}" method="POST">
                            @csrf
                            <input type="text" name="activite_id" value="{{ $datas->id }}" hidden />
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="lastname" class="form-label">Nom:</label>
                                    <input type="text" class="form-control" id="lastname"
                                        placeholder="Entrer le nom du participant" name="lastname">
                                </div>
                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="firstname" class="form-label">Prénom:</label>
                                    <input type="text" class="form-control" id="firstname"
                                        placeholder="Entrer le prénom du participant" name="firstname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="organisation" class="form-label">Organisation:</label>
                                    <input type="text" class="form-control" id="organisation"
                                        placeholder="Entrer le nom de l'organisation" name="organisation">
                                </div>

                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="fonction" class="form-label">fonction:</label>
                                    <input type="text" class="form-control" id="fonction"
                                        placeholder="Entrer la fonction du participant" name="fonction">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="formation" class="form-label">Formation:</label>
                                    <input type="text" class="form-control" id="formation"
                                        placeholder="Entrer la formation de base" name="formation">
                                </div>

                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="telephone" class="form-label">Téléphone:</label>
                                    <input type="text" class="form-control" id="telephone"
                                        placeholder="Entrer le numéro de téléphone" name="telephone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="whatsapp" class="form-label">Numéro whatsapp:</label>
                                    <input type="text" class="form-control" id="whatsapp"
                                        placeholder="Entrer le numéro whatsapp" name="whatsapp">
                                </div>


                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="text" class="form-control" id="email"
                                        placeholder="Entrer l'adresse email" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="code_participant" class="form-label">Code du participant (Id unique CNIB à
                                        18 chiffres):</label>
                                    <input type="text" class="form-control" id="code_participant"
                                        placeholder="Entrer le numéro NIP" name="code_participant">
                                </div>
                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="region" class="form-label">Région:</label>
                                    <input type="text" class="form-control" id="region"
                                        placeholder="Entrer la region" name="region">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="province" class="form-label">Province:</label>
                                    <input type="text" class="form-control" id="province"
                                        placeholder="Entrer la province" name="province">
                                </div>
                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="commune" class="form-label">Commune:</label>
                                    <input type="text" class="form-control" id="commune"
                                        placeholder="Entrer la commune" name="commune">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="village" class="form-label">Village/Secteur:</label>
                                    <input type="text" class="form-control" id="village"
                                        placeholder="Entrer le village/secteur" name="village">
                                </div>

                                <div class="col-12 col-md-6 mb-3 mt-3">
                                    <label for="date" class="form-label">Date d’enregistrement :</label>
                                    <input type="date" class="form-control" id="date" name="date">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <span class="p-0">Genre</span>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="gender"
                                            value="Homme" checked>Homme
                                        <label class="form-check-label" for="radio1"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="gender"
                                            value="Femme">Femme
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <span class="p-0">Tranche d'âge</span>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="tranche_age"
                                            value="Inférieur ou égale à 35" checked>Inférieur ou égale à 35
                                        <label class="form-check-label" for="radio1"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="tranche_age"
                                            value="36 à 50">36 à 50
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="tranche_age"
                                            value="Plus de 50">Plus de 50
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                </div>

                            </div>
                            <div class="row border-top mt-3">
                                <div class="col-12 col-md-5">
                                    <span class="p-0">Appartient à un autre groupe minoritaire</span>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="group_minoritaire"
                                            value="Oui" checked>Oui
                                        <label class="form-check-label" for="radio1"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="group_minoritaire"
                                            value="Non">Non
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <span class="p-0">Statut de résidence</span>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="statut_residence"
                                            value="Hôte" checked>Hôte
                                        <label class="form-check-label" for="radio1"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="statut_residence"
                                            value="PDI">PDI
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="statut_residence"
                                            value="Autre">Autre
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row border-top mt-3">
                                <div class="col-12 col-md-6">
                                    <span class="p-0">Handicap</span>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="handicap"
                                            value="Oui" checked>Oui
                                        <label class="form-check-label" for="radio1"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="handicap"
                                            value="Non">Non
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <span class="p-0">Si handicapé, type de handicap</span>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="type_handicap"
                                            value="Moteur" checked>Moteur
                                        <label class="form-check-label" for="radio1"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="type_handicap"
                                            value="Visuel">Visuel
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="type_handicap"
                                            value="Handicap auditif">Handicap auditif
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="type_handicap"
                                            value="Handicap de la parole">Handicap de la parole
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Autres informations sur le participant
                                    :</label>
                                <textarea class="form-control" id="description" name="description" id="" cols="30" rows="3"></textarea>
                            </div>


                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
