@extends('layouts.layout')


{{-- Setto il titolo della pagina --}}
@section('title', 'Crea COMIC')

{{-- Setto l'id della pagina --}}
@section('section-id', 'create-comic')


{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')
    <div class="container" id="main_page">
        <h4 class="text-white bg-primary w-25 p-1 ps-2" id="title_page">INSERISCI UN COMIC</h4>

        {{-- FORM --}}
        <div class="container">
            <form method="POST" action="{{ route('comics.store') }}">
                @csrf
                <div class="row text-white">
                    {{-- TITOLO --}}
                    <div class="col-12 mb-3">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo:</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                    </div>
                    {{-- DESCRIZIONE --}}
                    <div class="col-12 mb-3">
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione:</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                    </div>
                    {{-- COPERTINA --}}
                    <div class="col-12 mb-3">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Copertina:</label>
                            <input type="url" class="form-control" id="thumb" name="thumb">
                        </div>
                    </div>
                    {{-- PREZZO --}}
                    <div class="col-3 mb-3">
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo:</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                    </div>
                    {{-- SERIE --}}
                    <div class="col-3 mb-3">
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie:</label>
                            <input type="text" class="form-control" id="series" name="series">
                        </div>
                    </div>
                    {{-- DATA DI USCITA --}}
                    <div class="col-3 mb-3">
                        <div class="mb-3">
                            <label for="sale-date" class="form-label">Data di uscita:</label>
                            <input type="date" class="form-control" id="sale-date" name="sale-date">
                        </div>
                    </div>
                    {{-- TIPO --}}
                    <div class="col-3 mb-3">
                        <label for="series" class="form-label">Tipo:</label>
                        <select class="form-select mb-3" id="type" name="type">
                            <option>comic book</option>
                            <option>graphic novel</option>
                        </select>
                    </div>
                    {{-- DISEGNATO --}}
                    <div class="col-6 mb-3">
                        <div class="mb-3">
                            <label for="artists" class="form-label">Disegnato da:</label>
                            <input type="text" class="form-control" id="artists" name="artists">
                        </div>
                    </div>
                    {{-- SCRITTO --}}
                    <div class="col-6 mb-3">
                        <div class="mb-3">
                            <label for="writers" class="form-label">Scritto da:</label>
                            <input type="text" class="form-control" id="writers" name="writers">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-lg me-3">Invia</button>
                    <button type="reset" class="btn btn-primary btn-lg">Svuota</button>
                </div>
            </form>
            <div class="load text-center mb-3">
                <a class="load_more" href="{{ route('comics.index') }}">TORNA INDIETRO</a>
            </div>
        </div>
    @endsection
