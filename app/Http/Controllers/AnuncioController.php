<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Anuncio::query();

        $typeId = $request->input('type_id');
        if ($typeId) {
            $query->where('type_id', $typeId);
        }

        $priceMin = $request->input('price_min');
        if ($priceMin) {
            $query->where('price', '>=', $priceMin);
        }

        $priceMax = $request->input('price_max');
        if ($priceMax) {
            $query->where('price', '<=', $priceMax);
        }

        $title = $request->input('title');
        if ($title) {
            $query->where('title', 'like', '%' . $title . '%');
        } // WHERE title like '%carro%'

        // $anuncios = $query->paginate(10);
        $anuncios = $query->get();

        return response($anuncios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required|max:255',
            'price' => 'required|max:255',

           ]);

        $anuncio = Anuncio::create($request->all());

        return response($anuncio);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Anuncio::findOrFail($id);
        return response($message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Anuncio::findOrFail($id)
        ->update($request->all());


        return response("Anuncio actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anuncio::destroy($id);

        return response("El Anuncio con el id: ${id} ha sido eliminado");
    }
}
