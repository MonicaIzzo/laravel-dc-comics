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
                            <img src="https://static.dc.com/dc/files/default_images/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?w=640"
                                alt="Action Comics">
                            <p class="gallery">VIEW GALLERY</p>
                        </div>
                    </div>
                    {{-- DETTAGLI --}}
                    <div id="comic-decription" class="mb-3">
                        <h1>Action Comics #1000: The Deluxe Edition"</h1>
                        <section id="prince">
                            <div class="prince_sx">
                                <p class="peince">Prezzo: $19.99</p>
                                <p class="peince">AVAILABLE</p>
                            </div>
                            <div class="prince_dx">
                                <p class="peince">Check Availsbility</p>
                            </div>
                        </section>
                        {{-- DESCRIZIONE --}}
                        <p class="description">The celebration of 1,000 issues of Action Comics continues with a new, Deluxe
                            Edition
                            of
                            the amazing comic
                            that won raves when it hit comics shops in April! This hardcover includes all the stories from
                            that
                            issue,
                            plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80
                            Years
                            Of
                            Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s
                            new
                            look,
                            scripts for the stories, the original art from the lost story featuring art by Curt Swan and
                            more! Plus:
                            a
                            complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2
                            from
                            1938!
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
                                        <h5>"José Luis García-López",
                                            "Clay Mann",
                                            "Rafael Albuquerque",
                                            "Patrick Gleason",
                                            "Dan Jurgens",
                                            "Joe Shuster",
                                            "Neal Adams",
                                            "Curt Swan",
                                            "John Cassaday",
                                            "Olivier Coipel",
                                            "Jim Lee"</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column-1">
                                        <h3 class="text-primary">Written by:</h3>
                                    </div>
                                    <div class="column-2">
                                        <h5>"Brad Meltzer",
                                            "Tom King",
                                            "Scott Snyder",
                                            "Geoff Johns",
                                            "Brian Michael Bendis",
                                            "Paul Dini",
                                            "Louise Simonson",
                                            "Richard Donner",
                                            "Marv Wolfman",
                                            "Peter J. Tomasi",
                                            "Dan Jurgens",
                                            "Jerry Siegel",
                                            "Paul Levitz"</h5>
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
                                        <h5 class="text-primary">ACTION COMICS</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="column-1">
                                        <h3>U.S. Prezzo:</h3>
                                    </div>
                                    <div class="column-2">
                                        <h5>$19.99</h5>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="column-1">
                                        <h3>On Sale Date:</h3>
                                    </div>
                                    <div class="column-2">
                                        <h5>2018-10-02</h5>
                                    </div>
                                </div>

                            </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="load text-center">
            <a class="load_more" href="{{ route('comics.index') }}">Torna indietro</a>
        </div>
    </div>



@endsection
