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
        </div>
    </section>
</main>


@endsection