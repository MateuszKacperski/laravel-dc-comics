@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

<main class="container my-5">
    <h1 class="text-center mb-5">Aggiungi un nuovo fumetto</h1>
    <form action="{{ route('comics.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-3">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title"  placeholder="title" id="title">
                  </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" name="thumb"  placeholder="http....." id="thumb">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="price" class="form-label">prezzo</label>
                    <input type="text" class="form-control" name="price"  placeholder="$" id="price">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="series" class="form-label">serie</label>
                    <input type="text" class="form-control" name="series"  placeholder="serie" id="series">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">data vendita</label>
                    <input type="text" class="form-control" name="sale_date"  placeholder="data" id="sale_date">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="type" class="form-label">tipo</label>
                    <input type="text" class="form-control" name="type"  placeholder="tipo" id="type">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti</label>
                    <input type="text" class="form-control" name="artists"  placeholder="artisti" id="artists">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="writers" class="form-label">scrittori</label>
                    <input type="text" class="form-control" name="writers"  placeholder="scrittori" id="writers">
            </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>
                  </div>
            </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Invia</button>
              </div>
        </div>
    </form>
    
</main>

@endsection


