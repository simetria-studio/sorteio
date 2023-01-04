@extends('layouts.painel')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <form>
                    @csrf
                    <button class="btn btn-primary sorteio" type="button">SORTEAR</button>
                </form>
                <div>
                    <p class="sorteado">O numero sorteado foi: </p>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.sorteio').click(function() {
                $.ajax({
                    url: "{{ route('sorteio') }}",
                    type: "GET",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        console.log(data);
                        $('.sorteado').text('O numero sorteado foi: ' + data.number);
                    }
                });
            });
        });
    </script>
@endsection
