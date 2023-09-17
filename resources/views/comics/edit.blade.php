@extends('layouts.layout')


{{-- Setto il titolo della pagina --}}
@section('title', 'Edita COMIC')

{{-- Setto l'id della pagina --}}
@section('section-id', 'edit-comic')


{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')
    <div class="container" id="main_page">
        <h4 class="text-white bg-primary w-25 p-1 ps-2" id="title_page">INSERISCI UN COMIC</h4>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- FORM --}}
        <div class="container">
            <form method="POST" action="{{ route('comics.update', $comic) }}">
                @csrf
                @method('PUT')
                <div class="row text-white">
                    {{-- TITOLO --}}
                    <div class="col-12 mb-3">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo:</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ old('title', $comic->title) }}" required>
                        </div>
                    </div>
                    {{-- DESCRIZIONE --}}
                    <div class="col-12 mb-3">
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione:</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                rows="4">{{ $comic->description }}</textarea>
                        </div>
                    </div>
                    {{-- COPERTINA --}}
                    <div class="col-10 mb-3">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Copertina:</label>
                            <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                                name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                        </div>
                    </div>
                    {{-- ANTEPRIMA COPERTINA --}}
                    <div class="col-2 mb-3">
                        <div class="mb-3">
                            <img src="$comic->thumb" alt="preview" id="images-preview">
                        </div>
                    </div>
                    {{-- PREZZO --}}
                    <div class="col-3 mb-3">
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo:</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" required value="{{ old('price', $comic->price) }}">
                        </div>
                    </div>
                    {{-- SERIE --}}
                    <div class="col-3 mb-3">
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie:</label>
                            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                                name="series" value="{{ old('series', $comic->series) }}">
                        </div>
                    </div>
                    {{-- DATA DI USCITA --}}
                    <div class="col-3 mb-3">
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Data di uscita:</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date"
                                value="{{ old('sale_date', $comic->sale_date) }}">
                        </div>
                    </div>
                    {{-- TIPO --}}
                    <div class="col-3 mb-3">
                        <label for="type" class="form-label">Tipo:</label>
                        <select class="form-select mb-3" id="type" name="type" value="{{ $comic->type }}">
                            <option @if ($comic->type === 'comic book') selected @endif>comic book</option>
                            <option @if ($comic->type === 'graphic novel') selected @endif>graphic novel</option>
                        </select>
                    </div>
                    {{-- DISEGNATO --}}
                    <div class="col-6 mb-3">
                        <div class="mb-3">
                            <label for="artists" class="form-label">Disegnato da:</label>
                            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists"
                                name="artists" value="{{ old('artists', $comic->artists) }}">
                        </div>
                    </div>
                    {{-- SCRITTO --}}
                    <div class="col-6 mb-3">
                        <div class="mb-3">
                            <label for="writers" class="form-label">Scritto da:</label>
                            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers"
                                name="writers" value="{{ old('writers', $comic->writers) }}">
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

    @section('scripts')
        <script>
            const placeholder =
                "data:image/jpeg;base64,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";

            const copertinaInput = document.getElementById('thumb');
            const imagePreviewInput = document.getElementById('images-preview');

            imagePreviewInput.addEventListner('input', () => {
                imagePreviewInput.src = copertinaInput.value ? copertinaInput.value : placeholder;
            })
        </script>

    @endsection
