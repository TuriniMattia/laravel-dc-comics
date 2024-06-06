@extends('layout.app')

@section('title','Nuovi arrivi')

@section('content')
<main>
    <section>
        <div class="container">
            <h1>
                Modifica dettagli articolo: {{$comic->title}}
            </h1>
        </div>
        <div class="container">
            <form action="{{route('comics.update', $comic)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="string" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Titolo del prodotto da vendere" value="{{$comic->title}}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Carica un immagine</label>
                    <input type="string" name="thumb" class="form-control" id="exampleFormControlInput1" placeholder="http://..." value="{{$comic->thumb}}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5" placeholder="Descrivi brevemente l'opera" value="{{$comic->description}}"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="string" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Prezzo" value="{{$comic->price}}">
                </div>
                <div class="mb-3">
                    <label for="artist" class="form-label">Disegnato da</label>
                    <textarea type="text" name="artist" class="form-control" id="exampleFormControlInput1" rows="3" placeholder="Disegnatore/i" value="{{$comic->artist}}"></textarea>
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Scritto da</label>
                    <textarea type="text" name="writers" class="form-control" rows="3" id="exampleFormControlInput1" placeholder="Scrittore/i" value="{{$comic->writers}}"></textarea>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="string" name="type" class="form-control" id="exampleFormControlInput1" placeholder="Tipologia" value="{{$comic->type}}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="string" name="series" class="form-control" id="exampleFormControlInput1" placeholder="Serializzazione" value="{{$comic->series}}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Di Vendita</label>
                    <input type="date" name="sale_date" class="form-control" id="exampleFormControlInput1" placeholder="Data in cui carichiamo il prodotto" value="{{$comic->sale_date}}">

                </div>
                <button class="btn btn-primary">Salva modifiche</button>
            </form>

        </div>
    </section>
</main>


@endsection