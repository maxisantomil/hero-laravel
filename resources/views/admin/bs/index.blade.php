@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Sistema de batalla</h1>
    </div>

    <div class="row text-center mt-2">
        <div class="col-5 bg-primary bg-gradient text-white">
            <h2>{{$heroname}}</h2>
        </div>
        <div class="col-2 bg-warning bg-gradient ">
            <h3>vs</h3>
        </div>
        <div class="col-5 bg-danger bg-gradient text-white">
            <h2>{{$enemyname}}</h2>
        </div>
    </div>
        <div class="row text-center mt-2">
            <div class="col bg-dark bg-gradient text-white" id ="pru">
                <h2>Eventos de batalla</h2>
            </div>
        </div>
        <div style="display: none" class="mt-3 total ">
            @foreach($events as $ev)
            
            <div @if($ev["winner"]=="hero") class="alert alert-success"   @else class="alert alert-danger" @endif role="alert">
                <div  class="loading">{{$ev["text"]}}</div>
               
            </div>
            @endforeach
        </div>
        <div class="aca"></div>

@endsection