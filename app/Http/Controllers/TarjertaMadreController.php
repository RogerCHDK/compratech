<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TarjetaMadre;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response; 

class TarjertaMadreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarjetas = TarjetaMadre::where('status',1)->get();
        return view('tarjeta_madre.index')->with('tarjetas',$tarjetas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarjetas = TarjetaMadre::findOrFail($id);
        return view('tarjeta_madre.show')->with('tarjeta',$tarjetas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getImage($fileName)
    {
        $file = Storage::disk('tarjeta_madre')->get($fileName);
        return $file;
    } 

    public function showFiltro($id)
    {
        $tarjetas = TarjetaMadre::where('producto_id',$id)->get();
        return view('tarjeta_madre.show')->with('tarjeta',$tarjetas[0]);
        
    }

    public function callAction($method, $parameters)
    {
        return parent::callAction($method, array_values($parameters));
    }
}
