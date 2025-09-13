@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Les adhérents</h1>
    <p class="mb-4">Tableau de données des demandes d'adhésion à l'association monde rural (AMR)</p>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des demandes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom Prenom</th>
                            <th>numero</th>
                            <th>email</th>
                            <th>Date de la demande</th>
                            <th>Etat de la demande</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom Prenom</th>
                            <th>numero</th>
                            <th>email</th>
                            <th>Date de la demande</th>
                            <th>Etat de la demande</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->nom ." ".$data->prenom}}</td>
                            <td>+226 {{$data->numero}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->naissance}}</td>
                            <td>En cours</td>
                            <td>
                                <!--span class="d-inline-block"><i class="bi bi-eye-fill"></i></span>
                                <span class="d-inline-block"><i class="bi bi-pencil-square"></i></span-->
                                    <span class="d-inline-block" data-bs-toggle="modal" data-bs-target="#deleteAdherent">
                                        <i class="bi bi-trash"></i>
                                    </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteAdherent">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Suppression du demandeur</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body mb-3">
                    <p>Voulez vous vraiment supprimer le demandeur ?</p>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Annuler
                    </button>
                    <a class="btn btn-primary" href="{{route('deleteAdherent',$data['slug'])}}">
                        Supprimer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection