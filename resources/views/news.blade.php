@extends('layouts.layout')


{{-- Setto il titolo della pagina --}}
@section('title', 'NEWS')

{{-- Setto l'id della pagina --}}
@section('section-id', 'news')


{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')

    <div class="container" id="main_page">>
        <h4 class="text-white bg-primary w-25 p-1 ps-2" id="title_page">NEWS</h4>
    </div>

@endsection
