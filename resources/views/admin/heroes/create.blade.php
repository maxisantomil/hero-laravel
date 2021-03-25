@extends('layouts.app')
<!-- Agrega el contenido de cada pagina -->
@section('content') 
<h1>Crear nuevo Heroe</h1>

<form action="{{route('heroes.store')}}" method="POST">

  @include('admin.heroes.form') 
  
    <button type="submit" class="btn btn-outline-success">Crear</button>
  </form>
  <div class="row">
    <div class="col-10"></div>
    <div class="col-2">
    <a href="{{ route('heroes.index') }}" class= "btn btn-outline-dark mb-2 mt-2">Volver</a>
    </div>
  </div>
  
@endsection
