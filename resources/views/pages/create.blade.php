@extends('layouts.app')

@section('main-content')

<div class="container">
 <form action="{{route('pages.store')}}" method="POST">
    @csrf
    <input class="form-control mb-3" type="text" placeholder="Nome" aria-label="default input example" id="nome-animale" name="nome">
    <input class="form-control mb-3" type="text" placeholder="Specie" aria-label="default input example" id="specie-animale" name="nome_specie">
    <input class="form-control mb-3" type="number" placeholder="Eta'" aria-label="default input example" id="eta-animale" name="eta">
    <input class="form-control mb-3" type="text" placeholder="Sesso" aria-label="default input example" id="sesso-animale" name="sesso">
    <input class="form-control mb-3" type="text" placeholder="Habitat" aria-label="default input example" id="habitat-animale" name="habitat">
    <input type="submit" value="Crea nuovo animale" class="btn btn-primary btn-sm">
    <input type="reset" value="Svuota i campi" class="btn btn-danger btn-sm">
 </form>
</div>


@endsection
