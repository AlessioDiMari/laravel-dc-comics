@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>{{ $comic->title }}</h1>

    {{-- @dump($comic) --}}

    <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Descrizione</td>
            <td>{{ $comic->description }}</td>
          </tr>
          <tr>
            <td>Prezzo</td>
            <td>{{ $comic->price }}</td>
          </tr>
          <tr>
            <td>Serie</td>
            <td>{{ $comic->series }}</td>
          </tr>
          <tr>
            <td>Data pubblicazione</td>
            <td>{{ $comic->sale_date }}</td>
          </tr>
          <tr>
            <td>Tipo</td>
            <td>{{ $comic->type }}</td>
          </tr>
          <tr>
            <td>Artisti</td>
            <td>{{ $comic->artists }}</td>
          </tr>
          <tr>
            <td>Scrittori</td>
            <td>{{ $comic->writers }}</td>
          </tr>

        </tbody>
    </table>

    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen"></i> Modifica</a>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
      <i class="fa-regular fa-trash-can"></i> Elimina
    </button>

    

</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina comic</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Desideri realmente eliminare il fumetto : "{{ $comic->title }}" ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Elimina</button>
        </form>
      </div>
    </div>
  </div>
</div>
    
@endsection