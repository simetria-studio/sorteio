@extends('layouts.painel')

@section('content')
    <div class="container my-5">
        <div class="col-md-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Sorteados</h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Numero</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sorteados as $sorteado)
                            <tr>
                                <th scope="row">{{ $sorteado->number }}</th>
                                <td>{{ $sorteado->user_name }}</td>
                                <td>{{ $sorteado->user_email }}</td>
                                <td>{{ $sorteado->user_telefone }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
