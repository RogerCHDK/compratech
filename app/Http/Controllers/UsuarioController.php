<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

use App\Models\Municipio;
use App\Models\Estado;
use App\Models\User;
use App\Models\Compra;
use App\Models\DetalleCompra;
use Carbon\Carbon; 

class UsuarioController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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

    public function getDireccion()
    {
        $usuario = Auth::user(); 
        if(empty($usuario)){
            return view("iniciarsesion");
        }else{
            $estados = Estado::select('id','nombre')->orderBy('nombre')->get();
            return view("compra.continuar_compra1")->with('estados',$estados)->with('usuario',$usuario);
        }
       
    }

    public function getTarjeta()
    {
        $usuario = Auth::user();
        return view("compra.continuar_compra2")->with('usuario',$usuario);
    } 

    public function comprar()
    {
        $valor = 0.0;
        $fecha = Carbon::now()->format('Y-m-d');
        $usuario = Auth::id();
        $cart = session()->get('cart');
        foreach($cart as $id => $detalle){
            $valor += $detalle['precio'] * $detalle['cantidad'];
        }
        //creacion de la compra
        $compra=Compra::create( 
            ['user_id' => $usuario,
             'precio_total'=>$valor+100,
             'fecha_compra'=>$fecha,
             'status' => 1,
         ]
         );
         //creacion del detalle de la compra
         foreach($cart as $id => $detalle){
            $detalle_compra=DetalleCompra::create(
                ['compra_id' => $compra->id,
                 'producto_id'=>$detalle['id'],
                 'precio_unitario'=>$detalle['precio'],
                 'status' => 1,
                 'cantidad' => $detalle['cantidad'],
             ]
             );
        }
        session()->forget('cart');
        
        return redirect()->route('usuario.miscompras');
    }

    public function misCompras(){ 
        $usuario = Auth::user();
        $compra = Compra::where('user_id',$usuario->id)->get();
        return view('compra.mis_compras')->with('compras',$compra)->with('usuario',$usuario);
    }

}
