<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index')->with('productos',$productos); 
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = Producto::create($request->all());
        return redirect()->route('productos.index');
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

    public function cart()
    {
        return view('compra.carrito_compras');
    }

    public function addTocart($id){
        $producto = Producto::find($id);
        $cart = session()->get('cart');

        //si el carro esta vacio este es el primer produto
        if(!$cart){
            $cart = [
                $id =>[
                    "nombre" => $producto->nombre,
                    "cantidad" => 1,
                    "precio" => $producto->precio,
                    "descripcion" => $producto->descripcion,
                    "foto" => $producto->fotos->first()->ruta,
                    "id" => $producto->id,
                    "categoria" => $producto->categoria->nombre
                ]
                ];

                session()->put('cart',$cart);
                return redirect()->back()->with('success',"Producto added to cart con exito");
        }

        //si el carro no esta vacio checa si el producto existe e incrementa la cantidad
        if(isset($cart[$id])){
            $cart[$id]['cantidad']++;
            session()->put('cart',$cart);
            return redirect()->back()->with('success',"Producto added to cart con exito");
        }

        //si el item no existe en el carro se agrega al carro con la cantidad de 1
        $cart[$id] =[
            "nombre" => $producto->nombre,
            "cantidad" => 1,
            "precio" => $producto->precio,
            "descripcion" => $producto->descripcion,
            "foto" => $producto->fotos->first()->ruta,
            "id" => $producto->id,
            "categoria" => $producto->categoria->nombre
        ];

        session()->put('cart',$cart);
        return redirect()->back()->with('success',"Producto added to cart con exito");
    }

    public function limpiarCarro(){
        session()->forget('cart');
        return redirect()->back()->with('success',"Carro limpiado");
    }
}
