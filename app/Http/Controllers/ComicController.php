<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return to_route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // TODO Validare i campi in entrata
        $request->validate([
            'title' => 'required|string|unique:comics',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url:http,https',
            'price' => 'required|numeric|min:0',
            'series' => 'string',
            'sale_date' => 'required|numeric',
            'type' => 'string',
            'artists' => 'string',
            'writers' => 'string',
        ]);

        $data = $request->all();
        $comic->fill($data);
        $comic->save();


        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Comic::destroy($id);

        return to_route('comics.index');
    }
}
