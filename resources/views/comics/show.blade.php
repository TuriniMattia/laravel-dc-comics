@extends('layout.app')

@section('title','Nuovi arrivi')

@section('content')
<main>
    <section>
        <div class="container">
            <h1>
                Guarda il prodotto nel dettaglio : {{$comic->title}}
            </h1>
        </div>
        <div class="container">
            <h3>Descrizione</h3>
            <p>{{$comic->description}}</p>
            <h3>Prezzo</h3>
            <p>{{$comic->price}}</p>
            <h3>Disegnato da</h3>
            <p>{{$comic->artist}}</p>
            <h3>Scritto da</h3>
            <p>{{$comic->writer}}</p>
            <h3>Tipologia</h3>
            <p>{{$comic->type}}</p>
            <h3>Serie</h3>
            <p>{{$comic->series}}</p>
        </div>
    </section>
</main>


@endsection