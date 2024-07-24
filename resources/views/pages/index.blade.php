@extends('layouts.app')


@section('main-content')
<div class="container">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Nome specie</th>
            <th scope="col">Eta'</th>
            <th scope="col">Sesso</th>
            <th scope="col">Habitat</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($animals as $animal)


          <tr>
            <td>{{$animal->nome}}</td>
            <td>{{$animal->nome_specie}}</td>
            <td>{{$animal->eta}}</td>
            <td>{{$animal->sesso}}</td>
            <td>{{$animal->habitat}}</td>
            <td><a class="btn btn-primary btn-sm" href="{{route('pages.show',$animal)}}">View</a>
                <a class="btn btn-info btn-sm" href="{{route('pages.edit', $animal)}}">Edit</a>
                <form action="{{route('pages.destroy', $animal)}}" class="d-inline-block" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
          </tr>

          @endforeach
        </tbody>
      </table>
</div>
@endsection
