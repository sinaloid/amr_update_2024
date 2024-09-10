@extends('layouts.dashbord')
@section('script')
    <script src="{{ asset('texteditor/build/texteditor.js') }}"></script>
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Les actualités</h1>
        <p class="mb-4">Actualité des membres de l'association monde rural (AMR)</p>
        <div class="mb-2">
            <button class="btn btn-success fw-bold my-2 me-2">Nouvelles actualités</button>
            <button class="btn btn-danger fw-bold my-2 me-2">Anciennes actualités</button>
        </div>
        <!-- DataTales Example Liste des anciennes actualités -->
        <div class="card shadow mb-4">
            <div class="card-header py-1 d-flex">
                <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des nouvelles actualités</h6>
                <button class="btn btn-primary d-inline-block ms-auto fw-bold" data-bs-toggle="modal"
                    data-bs-target="#actu"><i class="bi bi-plus-circle-fill"></i> Ajouter une actualité</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Auteur</th>
                                <th>Catégorie</th>
                                <th>date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Titre</th>
                                <th>Auteur</th>
                                <th>Catégorie</th>
                                <th>date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($datas as $data)
                                @if (!$data->is_delete)
                                    <tr>
                                        <td>{{ $data->titre }}</td>
                                        <td>{{ $data->user()->first()->nom . ' ' . $data->user()->first()->prenom }}</td>
                                        <td>{{ $categories[$data->categorie] }}</td>
                                        <td>{{ $data->date }}</td>
                                        <td>
                                            <span class="d-inline-block" data-bs-toggle="modal"
                                                data-bs-target="#viewactu{{ $data->slug }}"><i
                                                    class="bi bi-eye-fill"></i></span>
                                            <span class="d-inline-block" data-bs-toggle="modal"
                                                data-bs-target="#editactu{{ $data->slug }}"><i
                                                    class="bi bi-pencil-square"></i></span>
                                            <form class="d-inline" method="POST"
                                                action="{{ route('actualite.destroy', $data->id) }}">
                                                <button type="submit" class="d-inline-block"><i
                                                        class="bi bi-trash"></i></button>
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="editactu{{ $data->slug }}">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Modification de l'actualité</h4>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body mb-3">
                                                    <form action="{{ route('actualite.update', $data->id) }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="mb-3 mt-3">
                                                            <label for="titre" class="form-label">Titre</label>
                                                            <input type="text" class="form-control" id="titre"
                                                                placeholder="Entrer le titre de l'actualité" name="titre"
                                                                value="{{ $data->titre }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="categorie" class="form-label">Catégorie:</label>
                                                            <select class="form-control" name="categorie" id="categorie"
                                                                value="{{ $data->categorie }}">
                                                                <option value="">Sélectionnez une catégorie</option>
                                                                @foreach ($categories as $key => $item)
                                                                    <option value="{{ $key }}">
                                                                        {{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="date" class="form-label">Date:</label>
                                                            <input type="date" class="form-control" id="date"
                                                                name="date" value="{{ $data->date }}">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">Ajouter une
                                                                image:</label>
                                                            <input type="file" class="form-control" id="image"
                                                                name="image">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">Description de
                                                                l'actulité:</label>
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
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Détails de l'actualité</h4>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body mb-3">
                                                    <img class="w-100 mb-3" src="{{ asset($data->image) }}" />
                                                    <div class="d-flex mb-3">
                                                        <span class="me-auto">Publier le
                                                            {{ $data->date . ' par ' . $data->user()->first()->nom . ' ' . $data->user()->first()->prenom }}</span>
                                                        <span>{{ $data->categorie }}</span>
                                                    </div>
                                                    <h2 class="fw-bold">{{ $data->titre }}</h2>
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
                    <h4 class="modal-title">Création d'une nouvelle actualité</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body mb-3">
                    <form action="{{ route('actualite.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="titre" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="titre"
                                placeholder="Entrer le titre de l'actualité" name="titre">
                        </div>
                        <div class="mb-3">
                            <label for="categorie" class="form-label">Catégorie:</label>
                            <select class="form-control" name="categorie" id="categorie">
                                <option value="">Sélectionnez une catégorie</option>
                                @foreach ($categories as $key => $item)
                                    <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date:</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Ajouter une image:</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description de l'actulité:</label>
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
