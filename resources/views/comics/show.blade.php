@extends('layout.app')

@section('title','Nuovi arrivi')

@section('content')
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <h1>
                        Guarda il prodotto nel dettaglio : {{$comic->title}}
                    </h1>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{route ('comics.edit',$comic)}}">Edit</a>
                </div>
            </div>
        </div>
        <div class="container">
            <h3>Descrizione</h3>
            <p>{{$comic->description}}</p>
            <h3>Prezzo</h3>
            <p>{{$comic->price}}</p>
            <h3>Disegnato da</h3>
            <p>{{$comic->artist}}</p>
            <h3>Scritto da</h3>
            <p>{{$comic->writers}}</p>
            <h3>Tipologia</h3>
            <p>{{$comic->type}}</p>
            <h3>Serie</h3>
            <p>{{$comic->series}}</p>
        </div>
    </section>
</main>


@endsection