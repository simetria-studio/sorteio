@extends('layouts.auth')
@section('content')
    <div class="container main-auth">
        <div class="row justify-content-center my-auto auth-card">
            <div class="col-md-8">
                <div class="">
                    <div class="title">
                        <h2>abate select</h2>
                        <p>cadastro</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register.custom.store') }}">
                            @csrf
                            <fieldset>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">CPF</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('cpf') is-invalid @enderror" name="cpf"
                                            value="{{ old('cpf') }}" autocomplete="cpf">

                                        @error('cpf')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">NOME COMPLETO</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" autocomplete="name">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btnNext btn btn-alt-1">Próximo</button>
                            </fieldset>
                            <fieldset class="hidden">

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">E-MAIL</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
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
                                    <label for="name" class="col-md-4 col-form-label text-md-end">WHATSAPP</label>
                                    <div class="col-md-6">
                                        <input id="telefone" type="text"
                                            class="form-control @error('telefone') is-invalid @enderror" name="telefone"
                                            value="{{ old('telefone') }}" autocomplete="telefone">
                                    </div>
                                    @error('telefone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btnPrev btn btn-alt-2">Anterior</button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btnNext btn btn-alt-1">Próximo</button>
                                    </div>
                                </div>

                            </fieldset>
                            <fieldset class="hidden">
                                <div class="row mb-3">
                                    <label for="estado" class="col-md-4 col-form-label text-md-end">ESTADO</label>
                                    <div class="col-md-6">
                                        <input id="estado" type="text"
                                            class="form-control @error('estado') is-invalid @enderror" name="estado"
                                            value="{{ old('estado') }}" autocomplete="estado">

                                        @error('estado')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">CIDADE</label>
                                    <div class="col-md-6">
                                        <input id="cidade" type="text"
                                            class="form-control @error('cidade') is-invalid @enderror" name="cidade"
                                            value="{{ old('cidade') }}" autocomplete="cidade">

                                        @error('cidade')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btnPrev btn btn-alt-2">Anterior</button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btnNext btn btn-alt-1">Próximo</button>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="hidden">
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">SENHA</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">CONFIRMAR
                                        SENHA</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btnPrev btn btn-alt-2">Anterior</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-alt-1 finish">Finalizar</button>
                                    </div>
                                </div>
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
