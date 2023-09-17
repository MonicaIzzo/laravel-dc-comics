@extends('layouts.layout')
{{-- Setto il titolo della pagina --}}
@section('title', $comic['title'])
{{-- Setto l'id della pagina --}}
@section('section-id', 'comic')
{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')
    <div class="container" id="main_page">
        {{-- COMICS --}}
        <div class="container">
            <div class="container-fluid bg-white" id="comic">
                <div class="container" id="main_page">
                    <div id="single_comic" class="bg-primary">
                        {{-- IMMAGINE --}}
                        <div class="img-comic">
                            <p class="type">COMIC BOOK</p>
                            <img src={{ $comic['thumb'] }} alt={{ $comic['title'] }}>
                            <p class="gallery">VIEW GALLERY</p>
                        </div>
                    </div>
                    {{-- DETTAGLI --}}
                    <div id="comic-decription" class="mb-3">
                        <h1 class="text-uppercase">{{ $comic['title'] }}</h1>
                        <section id="prince">
                            <div class="prince_sx">
                                <p class="peince">{{ $comic['price'] }}</p>
                                <p class="peince">AVAILABLE</p>
                            </div>
                            <div class="prince_dx">
                                <p class="peince">Check Availsbility</p>
                            </div>
                        </section>
                        {{-- DESCRIZIONE --}}
                        <p class="description">{{ $comic['description'] }}
                        </p>
                        <section id="footer">
                            {{-- COLONNA SX --}}
                            <div id="talent">
                                <h2 class="text-primary">Talent</h2>
                                <div class="row">
                                    <div class="column-1">
                                        <h3 class="text-primary">Art by:</h3>
                                    </div>
                                    <div class="column-2">
                                        <h5>{{ $comic['artists'] }}"</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column-1">
                                        <h3 class="text-primary">Written by:</h3>
                                    </div>
                                    <div class="column-2">
                                        <h5>{{ $comic['writers'] }}</h5>
                                    </div>
                                </div>
                            </div>
                            {{-- COLONNA DX --}}
                            <div id="specs">
                                <h2 class="text-primary">Specs</h2>
                                <div class="row">
                                    <div class="column-1">
                                        <h3 class="text-primary">Series:</h3>
                                    </div>
                                    <div class="column-2">
                                        <h5 class="text-primary text-uppercase">{{ $comic['series'] }}</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column-1">
                                        <h3>U.S. Prezzo:</h3>
                                    </div>
                                    <div class="column-2">
                                        <h5>{{ $comic['price'] }}</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column-1">
                                        <h3>On Sale Date:</h3>
                                    </div>
                                    <div class="column-2">
                                        <h5>{{ $comic['sale_date'] }}</h5>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="load text-center">
                <a class="load_more me-3" href="{{ route('comics.create') }}">Aggiungi un COMIC</a>
            </div>
            <div class="load text-center">
                <a class="load_more me-3" href="{{ route('comics.edit', $comic->id) }}">Modifica un COMIC</a>
            </div>
            <div class="load text-center">
                <a class="load_more" href="{{ route('comics.index') }}">Torna indietro</a>
            </div>


        </div>



    @endsection
