<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- LINK CSS  --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- LINK FONT AWESOME  --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document-@yield('title')</title>
</head>
<body>
    

    {{-- INCLUDE HEADER  --}}
    @include('partials.header')
    {{--END INCLUDE HEADER  --}}

    {{-- INCLUDE MAIN  --}}
    <main>
        @yield('content')
    </main>
    {{--END INCLUDE MAIN  --}}

    {{-- INCLUDE FOOTER  --}}
    @include('partials.footer')
    {{--END INCLUDE FOOTER  --}}

    {{-- LINK SCRIPT  --}}
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>