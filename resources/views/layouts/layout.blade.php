<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>


    <!-- Styles -->
    {{-- Importiamo gli asset --}}
    @vite('resources/js/app.js')

</head>

<body>
    {{-- Importiamo l'HEADER --}}
    @include('includes.header')

    {{-- Importiamo lo SLIDER --}}
    @include('includes.slider')

    {{-- Contenuto del MAIN che varia ad ogni PAGINA --}}
    <main class="container-fluid bg-dark pb-5" id="main">
        <section id=@yield('section_id')>
            @yield('main_content')
        </section>


    </main>

    {{-- Importiamo la sez. Services --}}
    @include('includes.services')

    {{-- Importiamo il FOOTER --}}
    @include('includes.footer')


    {{-- Importiamo gli script --}}
    @yield('scripts')

</body>

</html>
