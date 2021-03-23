@extends('layouts.app')
<!-- Agrega el contenido de cada pagina -->
@section('content')
  <div class="row">  
    <h1>Lista de Heroes</h1>
  </div>
  <div class="row">
    <div class="col-4">
    <a href="{{ route('admin.heroes.create') }}" class= "btn btn-warning mb-2 mt-2">Crear</a>
    </div>
  </div>
  <div class="row">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Hp</th>
          <th scope="col">Ataque</th>
          <th scope="col">Defensa</th>
          <th scope="col">Suerte</th>
          <th scope="col">Monedas</th>
          <th scope="col">Experiencia</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- El @ foreach funciona como el ngfor en Angular -->
        @foreach($heroes as $hero) 
        <tr>
            <th scope="row">{{$hero->id}}</th>
            <td>{{$hero->name}}</td>
            <td>{{$hero->hp}}</td>
            <td>{{$hero->atq}}</td>
            <td>{{$hero->def}}</td>
            <td>{{$hero->luck}}</td>
            <td>{{$hero->coins}}</td>
            <td>{{$hero->xp}}</td>
            <td>
              <div class="row">
                  <div class="col">
                    <a href="{{ route('admin.heroes.edit',['id'=>$hero->id])}}" class= "btn btn-primary mb-2 mt-2">Modificar</a>
                  </div>
                  <div class="col">
                    <form action="{{route('admin.heroes.destroy',['id'=>$hero->id])}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class= "btn btn-danger" >Borrar</button>
                    </form>
                  </div>
              </div>
            </td>
          </tr>
        @endforeach
      
      
    </tbody>
  </table>
</div>
@endsection