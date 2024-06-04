@extends('layout.app')

@section('title','Nuovi arrivi')

@section('content')


<main>
    <section>
        <div class="container">
            <h1>DC Comics</h1>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Sale Date</th>
                        <th>Type</th>
                        <th>Artist</th>
                        <th>Writer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        <td>
                            <img src="{{ $comic->thumb }}" height="150" width="150" alt="">
                        </td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->artist}}</td>
                        <td>{{$comic->writer}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</main>

@endsection