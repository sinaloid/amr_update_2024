@extends('layouts.app') @section('content')
<div class="container-fluid">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div
                            class="col-lg-6 d-none d-lg-block bg-login-image"
                        ></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">
                                        Content de vous revoir !
                                    </h1>
                                </div>
                                <form
                                    class="user"
                                    method="POST"
                                    action="{{ route('login') }}"
                                >
                                    @csrf
                                    <div class="form-group">
                                        <input
                                            type="email"
                                            class="form-control form-control-user @error('email') is-invalid @enderror"
                                            id="exampleInputEmail"
                                            aria-describedby="emailHelp"
                                            name="email"
                                            value="{{ old('email') }}"
                                            required
                                            autocomplete="email"
                                            autofocus
                                            placeholder="Entrer votre adresse email..."
                                        />

                                        @error('email')
                                        <span
                                            class="invalid-feedback"
                                            role="alert"
                                        >
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="password"
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="exampleInputPassword"
                                            placeholder="Mots de passe"
                                            name="password"
                                            required
                                            autocomplete="current-password"
                                        />

                                        @error('password')
                                        <span
                                            class="invalid-feedback"
                                            role="alert"
                                        >
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div
                                            class="custom-control custom-checkbox small"
                                        >
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                id="customCheck"
                                            />
                                            <label
                                                class="custom-control-label"
                                                for="customCheck"
                                                >Rester connecté
                                            </label>
                                        </div>
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-user btn-block"
                                    >
                                        Connexion
                                    </button>
                                    <hr />
                                    <a
                                        href="index.html"
                                        class="btn btn-google btn-user btn-block"
                                    >
                                        <i class="fab fa-google fa-fw"></i
                                        >Connectez-vous avec Google
                                    </a>
                                    <a
                                        href="index.html"
                                        class="btn btn-facebook btn-user btn-block"
                                    >
                                        <i class="fab fa-facebook-f fa-fw"></i>
                                        Connectez-vous avec Facebook
                                    </a>
                                </form>
                                <hr />
                                <div class="text-center">
                                    <a
                                        class="small"
                                        href="{{ route('password.request') }}"
                                        >Mot de passe oublié?</a
                                    >
                                </div>
                                <!--div class="text-center">
                                    <a class="small" href="register.html">Créer un compte !</a>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
