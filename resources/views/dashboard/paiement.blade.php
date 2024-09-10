@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Les paiements</h1>
    <p class="mb-4">Tableau des paiements effectués sur la plateforme l'association monde rural (AMR)</p>
    <div class="mb-2">
        @if (Route::currentRouteName() == 'paiements') 
        <button class="btn btn-success fw-bold my-2 me-2">Nouveaux paiements</button>
        <button class="btn btn-danger fw-bold my-2 me-2">Paiements en retard</button>
        <button class="btn btn-info fw-bold my-2 me-2">Anciens paiements</button>
        @endif
        
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-1 d-flex">
            <h6 class="d-inline-block py-2 font-weight-bold text-primary">Liste des paiements</h6>

            <a href="{{route('faire-paiement')}}" class="btn btn-primary d-inline-block ms-auto fw-bold"><i class="bi bi-plus-circle-fill"></i> Faire un paiement</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom Prénom</th>
                            <th>Montant</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom Prénom</th>
                            <th>Montant</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>Ouedraogo Ali</td>
                            <td>25.000 FCFA</td>
                            <td>12/01/2023</td>
                            <td>paiement</td>
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