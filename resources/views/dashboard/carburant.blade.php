@extends('layouts.dashbord')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Consommations en carburants</h1>
        <p class="mb-4">Tableau des consommations en carburants de l'association monde rural (AMR)</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-1 d-flex">
                <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des consommations</h6>
                <button class="btn btn-primary d-inline-block ms-auto fw-bold" data-bs-toggle="modal"
                    data-bs-target="#create"><i class="bi bi-plus-circle-fill"></i> Ajouter
                    une consommation</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom Prénom</th>
                                <th>Date</th>
                                <th>Destinations</th>
                                <th>Distance A/R Gourcy klm</th>
                                <th>Distances internes klm</th>
                                <th>Distance Totale Sortie</th>
                                <!--th>Observations</th-->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nom Prénom</th>
                                <th>Date</th>
                                <th>Destinations</th>
                                <th>Distance A/R Gourcy klm</th>
                                <th>Distances internes klm</th>
                                <th>Distance Totale Sortie</th>
                                <!--th>Observations</th-->
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($datas->carburants as $data)
                                @if (!$data->is_delete)
                                    <tr>
                                        <td>{{ $datas->nom . ' ' . $datas->prenom }}</td>
                                        <td>12/01/2023</td>
                                        <td>{{ $data->destination }}</td>
                                        <td>{{ $data->distance_aller_retour . ' klm' }}</td>
                                        <td>{{ $data->distance_interne . ' klm' }}</td>
                                        <td>{{ (int) $data->distance_aller_retour + (int) $data->distance_interne . ' klm' }}
                                        </td>
                                        <!--td>{{ $data->observation }}</td-->
                                        <td>
                                            <span class="d-inline-block"><i class="bi bi-eye-fill"></i></span>
                                            <button data-bs-toggle="modal" data-bs-target="#{{$data->slug}}" class="d-inline-block"><i class="bi bi-pencil-square"></i></button>
                                            <form class="d-inline" method="POST"
                                                action="{{ route('carburant.destroy', $data->id) }}">
                                                <button type="submit" class="d-inline-block"><i
                                                        class="bi bi-trash"></i></button>
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="{{$data->slug}}">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                            
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ajout d'une consommation</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                            
                                                <!-- Modal body -->
                                                <div class="modal-body mb-3">
                                                    <form action="{{ route('carburant.update',$data->id) }}" method="POST">
                                                        @csrf
                                                        @method("put")
                                                        <div class="mb-3 mt-3">
                                                            <label for="destination" class="form-label">Destination:</label>
                                                            <input type="text" class="form-control" id="destination"
                                                                placeholder="Entrer le nom de la destination" name="destination" value="{{$data->destination}}">
                                                        </div>
                                                        <div class="mb-3 mt-3"> 
                                                            <label for="distance_aller_retour" class="form-label">Distance aller/retour Gourcy:</label>
                                                            <input type="text" class="form-control" id="distance_aller_retour"
                                                                placeholder="Entrer la distance aller/retour" name="distance_aller_retour" value="{{$data->distance_aller_retour}}">
                                                        </div>
                                                        <div class="mb-3 mt-3">
                                                            <label for="distance_interne" class="form-label">Distance interne:</label>
                                                            <input type="text" class="form-control" id="distance_interne"
                                                                placeholder="Entrer la distance interne" name="distance_interne" value="{{$data->distance_interne}}">
                                                        </div>
                                                        <div class="mb-3 mt-3">
                                                            <label for="cout_au_km" class="form-label">Coût au klm:</label>
                                                            <input type="text" class="form-control" id="cout_au_km"
                                                                placeholder="Entrer la distance interne" name="cout_au_km" value="{{$data->cout_au_km}}">
                                                        </div>
                                                        <div class="mb-3 mt-3">
                                                            <label for="estimation_du_cout" class="form-label">Estimation coûts CFA:</label>
                                                            <input type="text" class="form-control" id="estimation_du_cout"
                                                                placeholder="Entrer la distance interne" name="estimation_du_cout" value="{{$data->estimation_du_cout}}">
                                                        </div>
                                                        <div class="mb-3 mt-3">
                                                            <label for="date_sortie" class="form-label">Date de sortie:</label>
                                                            <input type="date" class="form-control" id="date_sortie"
                                                                placeholder="Entrer la distance interne" name="date_sortie" value="{{$data->date_sortie}}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="date_retour" class="form-label">Date de retour:</label>
                                                            <input type="date" class="form-control" id="date_retour" name="date_retour" value="{{$data->date_retour}}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="observation" class="form-label">observation:</label>
                                                            <textarea class="form-control" id="observation" name="observation" id="" cols="30" rows="3" value="{{$data->observation}}"></textarea>
                                                        </div>
                            
                                                        <button type="submit" class="btn btn-primary">Modifier</button>
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
                        <h4 class="modal-title">Ajout d'une consommation</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body mb-3">
                        <form action="{{ route('carburant.store') }}" method="POST">
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
