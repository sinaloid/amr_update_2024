@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Les rapports</h1>
    <p class="mb-4">Tableau des rapports de l'association monde rural (AMR)</p>
    <div class="mb-2">
        @if (Route::currentRouteName() == 'rapports') 
            <button class="btn btn-success fw-bold my-2 me-2">Rapports reçus</button>
            <button class="btn btn-danger fw-bold my-2 me-2">Rapports en retard</button>
            <button class="btn btn-warning fw-bold my-2 me-2">Rapports en cours</button>
        @endif
        @if (Route::currentRouteName() == 'mes-rapports') 
            <button class="btn btn-danger fw-bold my-2 me-2">Rapports en retard</button>
            <button class="btn btn-warning fw-bold my-2 me-2">Rapports en cours</button>
            <button class="btn btn-success fw-bold my-2 me-2">Rapports terminer</button>
        @endif
        </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-1 d-flex">
            <h6 class="d-inline-block flex-grow-1 font-weight-bold text-primary py-2">Liste des rapports reçus</h6>
            <div class="d-inline-block">
                <button class="btn btn-primary d-inline-block ms-auto fw-bold"><i class="bi bi-plus-circle-fill"></i> Faire un rapport</button>
                @if (Route::currentRouteName() == 'rapports') <button class="btn btn-primary d-inline-block ms-auto fw-bold"><i class="bi bi-receipt"></i> Demander un rapport</button> @endif
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Agents</th>
                            <th>Dates</th>
                            <th>Types</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Agents</th>
                            <th>Dates</th>
                            <th>Types</th>
                            <th>Descriptions</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>Ouedraogo Ali</td>
                            <td>12/01/2023</td>
                            <td>Lorem ipsum dolor sit</td>
                            <td>participation à un atelier</td>
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