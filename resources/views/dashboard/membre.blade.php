@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Les administrateurs</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-1 d-flex">
            <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des administrateurs</h6>
            <button class="btn btn-primary d-inline-block ms-auto fw-bold" data-bs-toggle="modal" data-bs-target="#createMembre"><i class="bi bi-plus-circle-fill"></i> Ajouter un administrateur</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom Prénom</th>
                            <th>Position</th>
                            <th>Coordination</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom Prénom</th>
                            <th>Position</th>
                            <th>Coordination</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->nom ." ".$data->prenom}}</td>
                            <td>{{$data->position}}</td>
                            <td>{{$data->coordination}}</td>

                            <td>
                                
                                <span class="d-inline-block" data-bs-toggle="modal" data-bs-target="#deleteMembre">
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
    <div class="modal fade" id="createMembre">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Ajout d'un nouveau administrateur</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body mb-3">
                    <form class="user" method="POST" action="{{ route('createPersonnel') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user"
                                name="nom" placeholder="Nom">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"
                                name="prenom"
                                    placeholder="Prénom">
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-6">
                                <input type="email" class="form-control form-control-user"
                            name="email"
                                placeholder="Adresse email">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"
                                name="numero"
                                    placeholder="Numéro">
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"
                            name="position"
                                placeholder="Position">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"
                                name="coordination"
                                    placeholder="Coordination">
                            </div>
                        </div>
                        <input name="status" value="membre" hidden />
                        <input name="status" value="membre" hidden />
                        <input name="naissance" value="1987-01-01" hidden />
                        <input name="date_adhesion" value="1987-01-01" hidden />

                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Créer un compte
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteMembre">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Suppression du membre</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body mb-3">
                    <p>Voulez vous vraiment supprimer le membre ?</p>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Annuler
                    </button>
                    <a class="btn btn-primary" href="{{route('deletePersonnel',$data['slug'])}}">
                        Supprimer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
