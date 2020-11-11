@extends('template.master')
@section('contenido_central') 
	<h1>Este es el index de los productos</h1>
	<a href="{{route('productos.create')}}">Crear Producto</a>
	<table class="table"> 
 	<thead class="thead-dark">
 	<tr>
 	<th>ID</th>
    <th>Marca</th> 
    <th>Stock</th>
    <th>Precio</th>
    <th>Descripcion</th>
    <th>Tipo Producto</th>
    <th>Status</th> 
 	</tr>
 	 </thead>
 	 <tbody>
 	 	@foreach($productos as $producto)
 	<tr>
 		<td>{{$producto->id}}</td> 
 		<td>{{$producto->marca}}</td> 
 		<td>{{$producto->stock}}</td> 
 		<td>{{$producto->precio}}</td>
 		<td>{{$producto->descripcion}}</td>
 		<td>{{$producto->tipo_producto}}</td> 
 		<td>{{$producto->status}}</td> 
 	</tr>
 	 @endforeach
 	 	 </tbody> 

 </table>
@endsection  