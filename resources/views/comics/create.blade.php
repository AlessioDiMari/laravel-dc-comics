@extends('layouts.app')

@section('content')
    
    <div class="container py-5">

        <form action="">

            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="email" class="form-control" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="email" class="form-control" id="description" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="email" class="form-control" id="thumb" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="email" class="form-control" id="price" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="email" class="form-control" id="series" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data pubblicazione</label>
                <input type="email" class="form-control" id="sale_date" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="email" class="form-control" id="type" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="email" class="form-control" id="artists" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="email" class="form-control" id="writers" aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>

        </form>

    </div>

@endsection