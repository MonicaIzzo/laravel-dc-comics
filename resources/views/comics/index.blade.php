@extends('layouts.layout')


{{-- Setto il titolo della pagina --}}
@section('title', 'COMICS')

{{-- Setto l'id della pagina --}}
@section('section-id', 'comics')


{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')
    <div class="container" id="main_page">
        <h4 class="text-white bg-primary w-25 p-1 ps-2" id="title_page">CURRENT SERIES</h4>

        {{-- COMICS --}}
        <div class="container">
            <div class="row text-white">
                @forelse ($comics as $comic)
                    <div class="col-2 mb-3">
                        <a href="{{ route('comics.show', $comic) }}">
                            <img class="mb-2" src={{ $comic['thumb'] }} alt={{ $comic['title'] }}>
                            <div class="text-uppercase">{{ $comic['title'] }}</div>
                        </a>
                    </div>
                @empty
                    <h2>NON CI SONO COMIC DA MOSTRARE</h2>
                @endforelse
            </div>
        </div>
        <div class="load text-center">
            <a class="load_more">LOAD MORE</a>
        </div>
    </div>



@endsection
