@extends('layouts.layout')

{{-- Setto il titolo della pagina --}}
@section('title', 'Comics')

{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')
    <div class="container" id="main_page">
        <h4 class="text-white bg-primary w-25 p-1 ps-2" id="title_page">CURRENT SERIES</h4>

        {{-- COMICS --}}
        <div class="">
            <div class="row text-white">
                <div class="col-6">
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="title">Title</div>
                </div>
            </div>
        </div>


        <div class="load text-center">
            <a class="load_more">LOAD MORE</a>
        </div>
    </div>
@endsection
