@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mes messages</h1>
    <p class="mb-4">Tableau de données des agents de l'association monde rural (AMR)</p>

    <!-- DataTales Example -->
    <div class="row p-0 px-2">
        <div class="col-12 col-md-8 p-0 card shadow mb-4">
            <div class="card-header py-1 d-flex">
                <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des messages</h6>
                <button class="btn btn-primary d-inline-block ms-auto fw-bold"><i class="bi bi-chat-square-text-fill"></i> Envoyer un message</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @foreach ($datas as $data)
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center">
                                <div class="d-inline-block mr-3">
                                    <img width="80px" class="rounded-circle" src="{{asset('assets/img/undraw_profile_1.svg')}}"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="d-inline-block font-weight-bold">
                                    <div class="text-truncate">Bonjour à tous! Je me demande si vous pouvez m'aider avec le problème que j'ai eu.</div>
                                    <div class="small text-gray-500">Emily Fowler · 17h:30</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dropdown no-arrow me-1">
                            <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw fa-2x text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in">
                                <div class="dropdown-header">Actions</div>
                                <a class="dropdown-item" href="#">Lire</a>
                                <a class="dropdown-item" href="#">Répondre</a>
                                <a class="dropdown-item" href="#">Supprimer</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>

</div>
@endsection