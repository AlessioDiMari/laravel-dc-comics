@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>Comics</h1>

    @dump($comics)

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
                    <td><button type="button" class="btn btn-info">Vedi</button></td>
                </tr>

            @endforeach

        </tbody>
      </table>

</div>
    
@endsection