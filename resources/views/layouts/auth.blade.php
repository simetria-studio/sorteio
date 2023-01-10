<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('auth/css/main.min.css') }}">
    <title>ABATE SELECT</title>
</head>

<body>
    <div id="main">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="{{ asset('auth/js/script.js') }}"></script>
    @yield('js')
    <script>
        var images = [
            '{{ asset('auth/img/1.jpg') }}',
            '{{ asset('auth/img/2.jpg') }}',
            '{{ asset('auth/img/3.jpg') }}',
            '{{ asset('auth/img/4.jpg') }}',
            '{{ asset('auth/img/5.jpg') }}',
            '{{ asset('auth/img/6.jpg') }}',
            '{{ asset('auth/img/7.jpg') }}',
            '{{ asset('auth/img/8.jpg') }}',
            '{{ asset('auth/img/9.jpg') }}',
            '{{ asset('auth/img/10.jpg') }}',
            '{{ asset('auth/img/11.jpg') }}',
            '{{ asset('auth/img/12.jpg') }}',

        ];

        // índice da imagem atual
        var currentIndex = 0;

        // seleciona a imagem no HTML
        var $image = $(".auth-logo");

        // define a função para alternar as imagens
        function changeImage() {
            // atualiza o source da imagem
            $image.attr("src", images[currentIndex]);

            // incrementa o índice da imagem atual
            currentIndex = (currentIndex + 1) % images.length;
        }

        // chama a função de alteração de imagem a cada 20 segundos
        setInterval(changeImage, 2000);
    </script>
</body>

</html>
