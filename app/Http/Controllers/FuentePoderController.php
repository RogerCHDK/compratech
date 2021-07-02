<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FuentePoder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response; 

class FuentePoderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuentes_poder = FuentePoder::where('status',1)->get();
        return view('fuente_poder.index')->with('fuentes',$fuentes_poder);
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
        $fuentes_poder = FuentePoder::findOrFail($id);
        return view('fuente_poder.show')->with('fuentes',$fuentes_poder);
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
        $file = Storage::disk('fuente_poder')->get($fileName);
        return $file;
    } 

    public function showFiltro($id)
    {
        $fuentes_poder = FuentePoder::where('producto_id',$id)->get();
        return view('fuente_poder.show')->with('fuentes',$fuentes_poder[0]);
    }

    public function callAction($method, $parameters)
    {
        return parent::callAction($method, array_values($parameters));
    }
}
