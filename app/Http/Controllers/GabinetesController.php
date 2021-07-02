<?php

namespace App\Http\Controllers;
use App\Models\Gabinete;
use Illuminate\Http\Request;
use App\Models\Municipio;

class GabinetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gabinetes = Gabinete::where('status',1)->get();
        //$fotos = FotoProducto::where('status',1)->get();
        //return view('Almacenamiento.vercomponentes')->with('almacenamientos',$almacenamientos)->with('fotos',$fotos);
        return view('Gabinete.vercomponentes')->with('gabinetes',$gabinetes);
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
        $gabinete = Gabinete::find($id);
        return view('Gabinete.articulo')->with('gabinete',$gabinete);
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

    public function showFiltro($id)
    {
        $gabinete = Gabinete::where('producto_id',$id)->get();
        return view('Gabinete.articulo')->with('gabinete',$gabinete[0]);
    }

    public function combo_municipios_x_entidad($estado_id){
        $municipios = Municipio::select('id','nombre')->where('estado_id',$estado_id)->where('status',1)->get();
        return $municipios;
    }

    public function callAction($method, $parameters)
    {
        return parent::callAction($method, array_values($parameters));
    }
}
