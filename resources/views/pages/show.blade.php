@extends('layouts.app')


@section('main-content')
<div class="container">

    <h3>Dati animale</h3>
    <p>{{$animal->nome}}</p>
    <p>{{$animal->nome_specie}}</p>
    <p>{{$animal->eta}}</p>
    <p>{{$animal->sesso}}</p>
    <p>{{$animal->habitat}}</p>
</div>
@endsection
