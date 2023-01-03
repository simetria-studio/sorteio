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
                                        <input type="text" class="form-control @error('cpf') is-invalid @enderror"
                                            id="cpf" name="cpf" value="{{ old('cpf') }}" autocomplete="cpf">

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
                                        <select id="estado" class="form-control @error('telefone') is-invalid @enderror"
                                            name="estado">
                                            <option>Selecione o estado</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                            <option value="EX">Estrangeiro</option>
                                        </select>

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
                                        <select id="cidade"
                                            class="form-control @error('telefone') is-invalid @enderror" name="cidade">
                                            <option>Selecione a Cidade</option>
                                        </select>

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
@section('js')
    <script>
        $(document).ready(function() {
            $('#cpf').mask('000.000.000-00', {
                reverse: true
            });
            $('#telefone').mask('(00) 00000-0000');

            $('#estado').change(function() {
                var estado = $(this).val();
                if (estado) {
                    $.ajax({
                        type: "GET",
                        url: `{{ url('cidade') }}/${estado}`,
                        success: function(res) {
                            if (res) {
                                $("#cidade").empty();
                                $("#cidade").append('<option>Selecione a Cidade</option>');
                                $.each(res, function(key, value) {
                                    $("#cidade").append('<option value="' + value.nome +
                                        '">' +
                                        value.nome +
                                        '</option>');
                                });


                            } else {
                                $("#cidade").empty();
                            }
                        }
                    });
                } else {
                    $("#cidade").empty();
                }
            });
        });
    </script>
@endsection
