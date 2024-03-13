<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Tours</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/movil.css">
    <script src="{{ asset('/js/home.js') }}"></script>
    <script src="{{ asset('/js/modal.js') }}" defer></script>
    <script src="{{ asset('/js/select-init.js') }}"></script>
    <link rel="stylesheet" href="./css/select2.min.css">
    <script src="{{ asset('/js/select2.min.js') }}"></script>

</head>
<body class="font-principal">

    @include('header')

    <figure class="absolute inset-0 overflow-hidden pointer-events-none">
        {{-- <img src="./images/black.png" class="absolute w-full -z-10 top-0 right-0 max-w-full custom-black"> --}}


        {{-- <img src="./images/bg-tablet-pattern.jpg" class="absolute w-10 -z-10 top-0 right-0 max-w-full custom-height mdcustom-height ocult mdview"> --}}
        <video class="absolute w-10 -z-10 top-0 right-0 max-w-full custom-height mdcustom-height ocult mdview mdcustom-video" autoplay muted loop>
            <source src="./videos/fondov.mp4" type="video/mp4">
            Tu navegador no soporta el tag de video.
        </video>
        <img src="./images/orlandoimg.jpg" class="absolute w-10 -z-10 top-0 right-0 max-w-full custom-height mdcustom-height mdocult">

    </figure>

    @include('body')

    <div>
        @include('footer')
    </div>
    

</body>
</html>