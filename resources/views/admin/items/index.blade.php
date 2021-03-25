@extends('layouts.app')
<!-- Agrega el contenido de cada pagina -->
@section('content')
  <div class="row">  
    <h1>Lista de Items</h1>
  </div>
  <div class="row">
    <div class="col-4">
    <a href="{{ route('item.create') }}" class= "btn btn-warning mb-2 mt-2">Crear</a>
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
          <th scope="col">Precio</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- El @ foreach funciona como el ngfor en Angular -->
        @foreach($items as $item) 
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->hp}}</td>
            <td>{{$item->atq}}</td>
            <td>{{$item->def}}</td>
            <td>{{$item->luck}}</td>
            <td>{{$item->cost}}</td>
            <td>
              <div class="row">
                <div class="col">
                  <a href="{{ route('item.edit',$item->id) }}" class= "btn btn-primary mb-2 mt-2">Modificar</a>
                </div>
                <div class="col">
                   <form action="{{route('item.destroy',$item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <!-- ARREGLAR MODAL -->
                    <button type="submit" class= "btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Borrar</button>

                    <!-- Modal Bootstrap NO PUEDO ARREGLARLO
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Alerta</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Esta seguro que desea borrar el heroe seleccionado?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                              <button type="submit" href="#" id="submit" class="btn btn-primary">Aceptar</button>
                            </div>
                          </div>
                        </div>
                      </div>-->

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