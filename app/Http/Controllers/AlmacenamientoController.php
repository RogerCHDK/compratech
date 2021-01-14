<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Almacenamiento;
use App\Models\FotoProducto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response; 


class AlmacenamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacenamientos = Almacenamiento::where('status',1)->get();
        //$fotos = FotoProducto::where('status',1)->get();
        //return view('Almacenamiento.vercomponentes')->with('almacenamientos',$almacenamientos)->with('fotos',$fotos);
        return view('Almacenamiento.vercomponentes')->with('almacenamientos',$almacenamientos);
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
        $almacenamiento = Almacenamiento::find($id);
        return view('Almacenamiento.articulo')->with('almacenamiento',$almacenamiento);
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
        $file = Storage::disk('fotos')->get($fileName);
        return $file;
    } 

    public function showFiltro($id)
    {
        $almacenamiento = Almacenamiento::where('producto_id',$id)->get();
        return view('Almacenamiento.articulo')->with('almacenamiento',$almacenamiento[0]);
    }
}
