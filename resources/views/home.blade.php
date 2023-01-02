@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-custom">
                    <p>Bem vendo <span class="text-black-50 font-weight-bold name">{{ auth()->user()->name }}</span></p>
                    <div class="row my-5">
                        <div class="col-6">
                            <div class="input-number d-flex flex-column align-items-center" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <div>
                                    <i class="fa-solid fa-upload"></i>

                                </div>
                                <div>
                                    <span> Insira o numero</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 qr">
                            <div class="input-number d-flex flex-column align-items-center">
                                <div>
                                    <i class="fa-solid fa-qrcode"></i>
                                </div>
                                <div>
                                    <div id="qr-reader" style="width:500px"></div>
                                    <div id="qr-reader-results"></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="my-4">
                                <h5>Meus Numeros</h5>
                            </div>
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                @foreach ($numeros as $numero)
                                    <li class="list-group-item">{{ $numero->number }}</li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Insira o numero</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>

                        <input type="text" class="form-control number" placeholder="Insira o numero">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success save-number">Salvar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.save-number').click(function() {
                var number = $('.number').val();
                $.ajax({
                    url: "{{ route('save.number') }}",
                    type: "POST",
                    data: {
                        number: number,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sucesso',
                            text: data.message,
                        })
                        window.location.href = "{{ route('home') }}";
                    },
                    error: function(er) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: er.responseJSON.message,
                        })
                    }
                })
            });
            $(document).on('click', '.qr', function() {
                function docReady(fn) {
                    // see if DOM is already available
                    if (document.readyState === "complete" ||
                        document.readyState === "interactive") {
                        // call on next available tick
                        setTimeout(fn, 1);
                    } else {
                        document.addEventListener("DOMContentLoaded", fn);
                    }
                }

                docReady(function() {
                    var resultContainer = document.getElementById('qr-reader-results');
                    var lastResult, countResults = 0;

                    function onScanSuccess(decodedText, decodedResult) {
                        if (decodedText !== lastResult) {
                            ++countResults;
                            lastResult = decodedText;
                            // Handle on success condition with the decoded message.
                            console.log(`Scan result ${decodedText}`, decodedResult);
                        }
                    }

                    var html5QrcodeScanner = new Html5QrcodeScanner(
                        "qr-reader", {
                            fps: 10,
                            qrbox: 250
                        });
                    html5QrcodeScanner.render(onScanSuccess);
                });
            });
        });
    </script>
@endsection
