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
                        <th>Image</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td>
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{$comic->title}}</a>
                        </td>

                        <td>
                            <img src="{{ $comic->thumb }}" height="150" width="150" alt="">
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</main>

@endsection