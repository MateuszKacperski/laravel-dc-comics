@extends('layouts.main')

@section('title', 'Modifica Comic')

@section('main-content')

<main class="container my-5">
    <h1 class="text-center mb-5">Modifica il  fumetto</h1>
    <form action="{{ route('comics.update', $comic->id)}}" method="POST">

        @csrf
        @method('PUT')
      <!--  <input type="hydden" name="_method" value="PUT"> -->

        <div class="row">
            <div class="col-3">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @elseif(old('title', '')) is-valid @enderror" name="title"  placeholder="title" id="title" value="{{old('title', $comic->title)}}">
                  </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @elseif(old('thumb', '')) is-valid @enderror" name="thumb"  placeholder="http....." id="thumb"value="{{old('thumb', $comic->thumb)}}">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="price" class="form-label">prezzo</label>
                    <input type="text" class="form-control @error('price') is-invalid @elseif(old('price', '')) is-valid @enderror" name="price"  placeholder="$" id="price" value="{{old('price', $comic->price)}}">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="series" class="form-label">serie</label>
                    <input type="text" class="form-control @error('series') is-invalid @elseif(old('series', '')) is-valid @enderror" name="series"  placeholder="serie" id="series" value="{{old('series', $comic->series)}}">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">data vendita</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @elseif(old('sale_date', '')) is-valid @enderror" name="sale_date"  placeholder="data" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="type" class="form-label">tipo</label>
                    <input type="text" class="form-control @error('type') is-invalid @elseif(old('type', '')) is-valid @enderror" name="type"  placeholder="tipo" id="type" value="{{old('type', $comic->type)}}">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti</label>
                    <input type="text" class="form-control @error('artists') is-invalid @elseif(old('artists', '')) is-valid @enderror" name="artists"  placeholder="artisti" id="artists" value="{{old('artists', $comic->artists)}}">
            </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="writers" class="form-label">scrittori</label>
                    <input type="text" class="form-control @error('writers') is-invalid @elseif(old('writers', '')) is-valid @enderror" name="writers"  placeholder="scrittori" id="writers" value="{{old('writers', $comic->writers)}}">
            </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @elseif(old('description', '')) is-valid @enderror" id="description" rows="3" value="{{old('description', $comic->description)}}"></textarea>
                  </div>
            </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Salva</button>
              </div>
        </div>
    </form>
    
</main>

@endsection



