<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

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
       $data = $this->validateFilds($request->all());

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
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ]);


        $data = $request->all();

        //$comic->update($data);  le due istruzioni sootto si possono fare in questa unica istruzione

        $comic->fill($data);
        
        $comic->save();

              // $comic->update($data);

        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }

    private function validateFilds($data, $id= null){
        [
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ];
        $valida_data = Validator::make($data)->validate();
        return $valida_data;
    }
}