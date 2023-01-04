@extends('layouts.painel')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('generate') }}" method="post">
                    @csrf
                    <button class="btn btn-primary generate" type="submit">SORTEAR</button>
            </div>
            </form>
        </div>
    </div>

@endsection