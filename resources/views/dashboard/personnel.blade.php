@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Le personnel</h1>
    <p class="mb-4">Tableau de données des agents de l'association monde rural (AMR)</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-1 d-flex">
            <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste du personnel</h6>
            <button class="btn btn-primary d-inline-block ms-auto fw-bold"><i class="bi bi-plus-circle-fill"></i> Ajouter un agent</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom Prénom</th>
                            <th>Position</th>
                            <th>Coordination</th>
                            <th>Status</th>
                            <th>Age</th>
                            <th>Date d'adhesion</th>
                            <th>Cotisation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom Prénom</th>
                            <th>Position</th>
                            <th>Coordination</th>
                            <th>Status</th>
                            <th>Age</th>
                            <th>Date d'adhesion</th>
                            <th>Cotisation</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Personnel permanent</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>320,800 FCFA</td>
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