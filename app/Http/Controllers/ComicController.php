<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validation($request->all());

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        return redirect()->route("comics.show", $newComic->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);

        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();


        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return redirect()->route("comics.index");
    }


    private function validation($data){

        $validator = Validator::make($data, [

            'title' => 'required|max:255',
            'description' => 'required|max:10000',
            'thumb' => 'required|max:1000',
            'price' => 'required|max:7',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:100',
            'artists' => 'max:5000|nullable',
            'writers' => 'max:5000|nullable',

        ] , [

            'title.required'=> "Devin inserire il titolo",
            'title.max'=> "Devi inserrire massimo :max carateri",

            'description.required'=> "Devi inserire la descrizione",
            'description.max'=> "Devi inserrire massimo :max carateri",

            'thumb.required'=> "Devi inserire l'url dell'immagine",
            'thumb.max'=> "Devi inserrire massimo :max carateri",

            'price.required'=> "Devi inserire il prezzo",
            'price.max'=> "Devi inserrire massimo :max carateri",

            'series.required'=> "Devi inserire la serie",
            'series.max'=> "Devi inserrire massimo :max carateri",

            'sale_date.required'=> "Devi inserire la data di publicazione",
            'sale_date.max'=> "Devi inserrire massimo :max carateri",

            'type.required'=> "Devi inserire la tipologia",
            'type.max'=> "Devi inserrire massimo :max carateri",

            'max'=> "Il campo :attribute deve avere massimo : max caratteri"

        ], [
            'artists'=>"artisti",
            'writers'=>"scrittori",
        ])->validate();
        
    }

}