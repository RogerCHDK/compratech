@extends('template.master')
@section('contenido_central') 
	<h1>Este es el index de ram</h1>
	<a href="{{route('ram.create')}}">Crear Ram</a>
	<table class="table"> 
 	<thead class="thead-dark">
 	<tr>
 	<th>ID</th> 
    <th>Tipo de Memoria</th> 
    <th>Memoria interna</th>
    <th>Velocidad</th>
    <th>Latencia</th>
    <th>Status</th> 
 	</tr> 
 	 </thead>
 	 <tbody>
 	 	@foreach($rams as $ram)
 	<tr>
 		<td>{{$ram->id}}</td> 
 		<td>{{$ram->tipo_memoria}}</td> 
 		<td>{{$ram->memoria_interna}}</td> 
 		<td>{{$ram->velocidad}}</td>
 		<td>{{$ram->latencia}}</td> 
 		<td>{{$ram->status}}</td> 
 	</tr>
 	 @endforeach
 	 	 </tbody> 

 </table>
@endsection 