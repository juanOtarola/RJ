@extends('layouts.app')

@section('content')

 <form method="POST" action="{{ route('servicios.store')}}">
 	@csrf
 	<label>
 		<br>Nombre del Servicio <br>
 		<input type="text" name="nombre">
 	</label>
 	<label>
 		<br>Marca <br>
 		<input type="text" name="marca">
 	</label>
 	<label>
 		<br>Tipo <br>
 		<input type="text" name="tipo">
 	</label>
 	<label>
 		<br>Valor <br>
 		<input type="number" name="valor">
 	</label>
 	<label>
 		<br>Descripcion <br>
 		<textarea name="descripcion"></textarea>
 	</label>
<br>
<button>Guardar</button> </form>
@endsection
