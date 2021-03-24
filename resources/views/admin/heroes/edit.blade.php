@extends('layouts.app')
<!-- Agrega el contenido de cada pagina -->
@section('content') 
<h1>Editar Heroe</h1>

<form action="{{route('heroes.update',$hero->id)}}" method="POST">
  @csrf <!-- se agrega por seguridad -->
  @method('PUT')
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" value=" {{ $hero->name }} " aria-describedby="emailHelp" placeholder="Ingrese un nombre" required>
    </div>
    <div class="form-group">
        <label for="hp">HP</label>
        <input type="number" class="form-control" id="hp" name="hp" value="{{ $hero->hp }}" aria-describedby="emailHelp" placeholder="Ingrese los puntos de vida" required>
      </div>
      <div class="form-group">
        <label for="atq">Ataque</label>
        <input type="number" class="form-control" id="atq" name="atq" value="{{ $hero->atq }}" aria-describedby="emailHelp" placeholder="Ingrese los puntos de ataque"required>
      </div>
      <div class="form-group">
        <label for="def">Defensa</label>
        <input type="number" class="form-control" id="def" name="def" value="{{ $hero->def }}" aria-describedby="emailHelp" placeholder="Ingrese los puntos de defensa" required>
      </div>
      <div class="form-group">
        <label for="luck">Suerte</label>
        <input type="number" class="form-control" id="luck" name="luck" value="{{ $hero->luck }}" aria-describedby="emailHelp" placeholder="Ingrese los puntos de suerte" required>
      </div>
      <div class="form-group">
        <label for="coins">Monedas</label>
        <input type="number" class="form-control" id="coins" name="coins" value="{{ $hero->coins }}" aria-describedby="emailHelp" placeholder="Ingrese la cantidad de monedas" required>
      </div>
    <button type="submit" class="btn btn-outline-success">Editar</button>
  </form>
  <div class="row">
    <div class="col-10"></div>
    <div class="col-2">
    <a href="{{ route('heroes.index') }}" class= "btn btn-outline-dark mb-2 mt-2">Volver</a>
    </div>
  </div>
  
@endsection
