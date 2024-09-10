@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mes réunions</h1>
    <p class="mb-4">Tableau de mes réunions</p>
    <div class="mb-2">
        <button class="btn btn-warning fw-bold my-2 me-2">Réunions à venir</button>
        <button class="btn btn-success fw-bold my-2 me-2">Réunions terminer</button>
        </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-1 d-flex">
            <h6 class="d-inline-block flex-grow-1 font-weight-bold text-primary py-2">Liste des réunions à venir</h6>
            <div class="d-inline-block">
                <button class="btn btn-primary d-inline-block ms-auto fw-bold"><i class="bi bi-plus-circle-fill"></i> Créer une Réunion</button>
                @if (Route::currentRouteName() == 'rapports') <button class="btn btn-primary d-inline-block ms-auto fw-bold"><i class="bi bi-receipt"></i> Créer une Réunion</button> @endif
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Lieu</th>
                            <th>Date</th>
                            <th>Heure de début</th>
                            <th>Heure de fin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Titre</th>
                            <th>Lieu</th>
                            <th>Date</th>
                            <th>Heure de début</th>
                            <th>Heure de fin</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>Reunion au AFT</td>
                            <td>Association AFT</td>
                            <td>12/01/2023</td>
                            <td>10H:30</td>
                            <td>15H:30</td>
                            <td>
                                <span class="d-inline-block"><i class="bi bi-eye-fill"></i></span>
                                <span class="d-inline-block"><i class="bi bi-pencil-square"></i></span>
                                <span class="d-inline-block"><i class="bi bi-trash"></i></span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection