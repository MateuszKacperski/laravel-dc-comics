@extends('layouts.main')

   @section('main-content')
     <main class="container">
        <section id="products">
            @foreach ($comics=config('comics') as $index => $comic)  
            <div class="card">
                <a href="{{route('comic', $index)}}">
                <div class="product-card">
                    <div class="card-conteiner">
                        <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
                        <h4>{{ $comic['title']}}</h4>
                    </div>
                </div>
            </a>
            </div>
            @endforeach
        </section>
    </main>
   @endsection