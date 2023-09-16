@extends('layouts.layout')


{{-- Setto il titolo della pagina --}}
@section('title', 'MOVIES')

{{-- Setto l'id della pagina --}}
@section('section-id', 'movies')


{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')

    <div class="container" id="main_page">>
        <h4 class="text-white bg-primary w-25 p-1 ps-2" id="title_page">MOVIES</h4>
    </div>

@endsection
