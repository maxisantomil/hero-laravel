@extends('layouts.app')
<!-- Agrega el contenido de cada pagina -->
@section('content') 
<h1>Editar Item - {{$item->name}}</h1>

<form action="{{route('item.update',$item->id)}}" method="POST" enctype="multipart/form-data">
 

  @method('PUT')

  @include('admin.items.form') <!-- con esto reutilizamos codigo y optimizamos -->
  
  <button type="submit" class="btn btn-outline-success">Editar</button>
  </form>
  <div class="row">
    <div class="col-10"></div>
    <div class="col-2">
    <a href="{{ route('item.index') }}" class= "btn btn-outline-dark mb-2 mt-2">Volver</a>
    </div>
  </div>
  
@endsection
