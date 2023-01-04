@extends('layouts.painel')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('generate') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Quantidade de QRCODES</label>
                                <input type="text" class="form-control" name="qty" id="exampleFormControlInput1">
                            </div>
                        </div>

                    </div>
                    <button class="btn btn-primary generate" type="submit">GERAR QRCODE</button>
            </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // $(document).ready(function() {
        //     $('.generate').click(function() {
        //         var qty = $('input[name=qty]').val();
        //         $.ajax({
        //             url: "{{ route('generate') }}",
        //             type: "POST",
        //             data: {
        //                 _token: "{{ csrf_token() }}",
        //                 qty: qty
        //             },
        //             success: function(data) {
        //                 console.log(data);
        //             }
        //         });
        //     });
        // });
    </script>
@endsection
