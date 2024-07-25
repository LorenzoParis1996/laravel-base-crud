@extends('layouts.app')


@section('main-content')

<div class="container">
    @if ($errors->any())
       <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
             <li>{{$error}}</li>
            @endforeach
         </ul>
       </div>
    @endif
</div>

<div class="container">
    <h2>Cambia i dati di {{$animal->nome}}</h2>
 <form action="{{route('pages.update', $animal)}}" method="POST">
    @method("PUT")
    @csrf
    <input class="form-control mb-3" type="text" placeholder="Nome" aria-label="default input example" id="nome-animale" name="nome" value="{{old('nome',$animal->nome)}}">

    <input class="form-control mb-3" type="text" placeholder="Specie" aria-label="default input example" id="specie-animale" name="nome_specie" value="{{old('nome_specie',$animal->nome_specie)}}">

    <input class="form-control mb-3" type="number" placeholder="Eta'" aria-label="default input example" id="eta-animale" name="eta" value="{{old('eta',$animal->eta)}}">

    <input class="form-control mb-3" type="text" placeholder="Sesso" aria-label="default input example" id="sesso-animale" name="sesso" value="{{old('sesso',$animal->sesso)}}">

    <input class="form-control mb-3" type="text" placeholder="Habitat" aria-label="default input example" id="habitat-animale" name="habitat" value="{{old('habitat',$animal->habitat)}}">

    <input type="reset" value="Svuota i campi" class="btn btn-warning btn-sm">
    <input type="submit" value="Aggiorna" class="btn btn-success btn-sm">
 </form>
</div>


@endsection
