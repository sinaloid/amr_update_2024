@extends('layouts.dashbord')
@section('script')
    <script src="{{ asset('texteditor/build/texteditor.js') }}"></script>
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Newsletters</h1>
        <p class="mb-4"></p>

        <!-- DataTales Example Liste des anciennes actualités -->
        <div class="card shadow mb-4">
            <div class="card-header py-1 d-flex">
                <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des abonnés</h6>
                <!--button class="btn btn-primary d-inline-block ms-auto fw-bold" data-bs-toggle="modal" data-bs-target="#actu"><i
                        class="bi bi-plus-circle-fill"></i> Ajouter un agents</button-->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($datas as $data)
                                @if (!$data->is_delete)
                                    <tr>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>
                                            @if ($data->is_souscribe)
                                                Souscription en cours
                                            @else
                                                Souscription annuler
                                            @endif
                                        </td>
                                        <td>

                                            <button class="d-inline-block" data-bs-toggle="modal"
                                                data-bs-target="#delete{{ $data->slug }}"><i
                                                    class="bi bi-trash"></i></button>

                                        </td>
                                    </tr>
                                    <div class="modal fade" id="delete{{ $data->slug }}">
                                        <div class="modal-dialog modal-md modal-dialog-centered">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Suppression</h4>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body mb-3">
                                                    <form class="d-inline" method="POST"
                                                        action="{{ route('newsletters.destroy', $data->id) }}">
                                                        @csrf
                                                        @method('delete')


                                                        <div class="mb-4">
                                                            Voulez-vous supprimer définitivement ces données ?
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">Supprimer</button>
                                                        <button class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Annuler</button>
                                                    </form>

                                                    <script type="text/javascript">
                                                        var id = '#{{ $data->slug }}'
                                                        ClassicEditor
                                                            .create(document.querySelector(id))
                                                            .catch(error => {
                                                                console.error(error);
                                                            });
                                                    </script>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="editactu{{ $data->slug }}">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Modification</h4>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body mb-3">
                                                    <form action="{{ route('agents.update', $data->id) }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="mb-3 mt-3">
                                                            <label for="nom" class="form-label">Nom</label>
                                                            <input type="text" class="form-control" id="nom"
                                                                placeholder="Entrer le nom du partenaire" name="nom"
                                                                value="{{ $data->nom }}">
                                                        </div>

                                                        <div class="mb-3 mt-3">
                                                            <label for="post_occupe" class="form-label">Poste occupé</label>
                                                            <input type="text" class="form-control" id="post_occupe"
                                                                placeholder="Entrer le poste occupé" name="post_occupe"
                                                                value="{{ $data->post_occupe }}">
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">Ajouter une
                                                                image:</label>
                                                            <input type="file" class="form-control" id="image"
                                                                name="image">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">Message :</label>
                                                            <textarea class="form-control min-height" id="{{ $data->slug }}" name="description">{{ $data->description }}</textarea>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                                        <button class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Annuler</button>
                                                    </form>

                                                    <script type="text/javascript">
                                                        var id = '#{{ $data->slug }}'
                                                        ClassicEditor
                                                            .create(document.querySelector(id))
                                                            .catch(error => {
                                                                console.error(error);
                                                            });
                                                    </script>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="viewactu{{ $data->slug }}">
                                        <div class="modal-dialog modal-md modal-dialog-centered">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Détails</h4>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body mb-3">
                                                    <img class="w-100 mb-3" src="{{ asset($data->image) }}" />

                                                    <h2 class="fw-bold">{{ $data->nom }}</h2>
                                                    <p>
                                                        {!! $data->description !!}
                                                    </p>

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

    </div>

    <div class="modal fade" id="actu">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Ajout d'un agent</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body mb-3">
                    <form action="{{ route('agents.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="nom" class="form-label">Nom prénom</label>
                            <input type="text" class="form-control" id="nom"
                                placeholder="Entrer le nom du partenaire" name="nom">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="post_occupe" class="form-label">Poste occupé</label>
                            <input type="text" class="form-control" id="post_occupe"
                                placeholder="Entrer le poste occupé" name="post_occupe">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Message :</label>
                            <div></div>
                            <textarea class="form-control min-height" id="editor" name="description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    </form>

                    <script>
                        ClassicEditor
                            .create(document.querySelector('#editor'))
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                </div>



            </div>
        </div>
    </div>
@endsection
