@extends('layouts.dashbord')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Les projets</h1>
        <p class="mb-4">Tableau des projets de l'association monde rural (AMR)</p>
        <div class="mb-2">
            <button class="btn btn-success fw-bold my-2 me-2">Projets terminer</button>
            <button class="btn btn-warning fw-bold my-2 me-2">Projets en cours</button>
            <button class="btn btn-info fw-bold my-2 me-2">Projets à venir</button>
            <button class="btn btn-danger fw-bold my-2 me-2">Projets en suspension</button>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-1 d-flex">
                <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des projets terminés</h6>
                <button class="btn btn-primary d-inline-block ms-auto fw-bold" data-bs-toggle="modal"
                    data-bs-target="#create"><i class="bi bi-plus-circle-fill"></i> Ajouter un projet</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom du projet</th>
                                <th>Date de début</th>
                                <th>Date de fin</th>
                                <th>Statut</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nom du projet</th>
                                <th>Date de début</th>
                                <th>Date de fin</th>
                                <th>Statut</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($datas as $data)
                                @if (!$data->is_delete)
                                    <tr>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->startDate }}</td>
                                        <td>{{ $data->endDate }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td>{{ $data->description }}</td>
                                        <!--td>ici on aurra la sommes des cotisation suite à particition atelier de AMR et de PDF</td-->
                                        <td>
                                            <a href="{{route("projet.show",$data->slug)}}" class="d-inline-block"><i class="bi bi-eye-fill"></i></a>
                                            <span class="d-inline-block" data-bs-toggle="modal"
                                                data-bs-target="#update{{ $data->slug }}"><i
                                                    class="bi bi-pencil-square"></i></span>
                                            <form class="d-inline" method="POST"
                                                action="{{ route('projet.destroy', $data->id) }}">
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
                                                    <form action="{{ route('projet.update', $data->id) }}" method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <div class="mb-3 mt-3">
                                                            <label for="name" class="form-label">Nom du projet:</label>
                                                            <input type="text" class="form-control" id="name"
                                                                placeholder="Entrer le nom du projet" name="name"
                                                                value="{{ $data->name }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="startDate" class="form-label">Date de début du
                                                                projet:</label>
                                                            <input type="date" class="form-control" id="startDate"
                                                                name="startDate" value="{{ $data->startDate }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="endDate" class="form-label">Date de fin du
                                                                projet:</label>
                                                            <input type="date" class="form-control" id="endDate"
                                                                name="endDate" value="{{ $data->endDate }}">
                                                        </div>
                                                        <!--div class="mb-3">
                                                                <label for="niveau-edt" class="form-label">Niveau d'excécution du
                                                                    projet:</label> <br>
                                                                <input class="d-block" type="range" value="0" id="niveau-edt"
                                                                    min="0" max="100"
                                                                    oninput="this.nextElementSibling.value = this.value">
                                                                <output>0</output>
                                                            </div-->
                                                        <div class="mb-3">
                                                            <label for="fichier-edt" class="form-label">Ajouter un
                                                                fichier:</label>
                                                            <input type="file" class="form-control" id="fichier-edt"
                                                                name="fichier">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">Description du
                                                                projet:</label>
                                                            <textarea class="form-control" id="description" name="description" id="description" cols="30" rows="3">{{ $data->description }}</textarea>
                                                        </div>


                                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                        <button class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Annuler</button>
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
                        <h4 class="modal-title">Ajout d'un projet</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body mb-3">
                        <form action="{{ route('projet.store') }}" method="POST">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Nom du projet:</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Entrer le nom du projet" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="startDate" class="form-label">Date de début du projet:</label>
                                <input type="date" class="form-control" id="startDate" name="startDate">
                            </div>
                            <div class="mb-3">
                                <label for="endDate" class="form-label">Date de fin du projet:</label>
                                <input type="date" class="form-control" id="endDate" name="endDate">
                            </div>
                            <!--div class="mb-3">
                                        <label for="niveau-edt" class="form-label">Niveau d'excécution du
                                            projet:</label> <br>
                                        <input class="d-block" type="range" value="0" id="niveau-edt"
                                            min="0" max="100"
                                            oninput="this.nextElementSibling.value = this.value">
                                        <output>0</output>
                                    </div-->
                            <div class="mb-3">
                                <label for="fichier-edt" class="form-label">Ajouter un
                                    fichier:</label>
                                <input type="file" class="form-control" id="fichier-edt" name="fichier">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description du
                                    projet:</label>
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
