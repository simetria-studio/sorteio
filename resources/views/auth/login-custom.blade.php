@extends('layouts.auth')
@section('content')
    <div class="container main-auth">
        <div class="row justify-content-center my-auto auth-card">
            <div class="col-md-8">
                <div class="">
                    <div class="title">
                       <img src="{{ asset('auth/img/7.jpg') }}" alt="Logo" class="auth-logo">
                        <p>entrar</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">E-MAIL</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">SENHA</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        value="{{ old('password') }}" autocomplete="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <button type="button" class="btnLogin btn btn-alt-1">Entrar</button>

                            </div>
                        </form>
                        <div class="text-center my-4">
                            <p>Não tem cadastro? <a href="{{ route('register.custom') }}">Clique aqui</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.btnLogin').click(function() {
                Swal.fire({
                    title: 'Aguarde...',
                    html: 'Estamos verificando suas credenciais',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                });
                $('form').submit();
            });
        });
    </script>
@endsection
