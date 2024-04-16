@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>Comics</h1>

    {{-- @dump($comics) --}}

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Artisti</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          @foreach ($comics as $comic)
              
              <tr>
                  <td>{{ $comic->title }}</td>
                  <td>{{ $comic->series }}</td>
                  <td>{{ $comic->artists }}</td>
                  <td><a href="{{ route('comics.show', $comic->id) }}" type="button" class="btn btn-info">Vedi</a></td>
              </tr>

          @endforeach

        </tbody>
    </table>

    <a href="{{ route('comics.create') }}" type="button" class="btn btn-primary">Add comic</a href="">

</div>
    
@endsection