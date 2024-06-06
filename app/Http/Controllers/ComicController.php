<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class ComicController extends Controller
{
    //
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);

        // if ($comic === null) {
        //     abort('404');
        // }

        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }
    public function store(Request $request)
    {

        $form_data = $request->all();
        $new_comic = Comic::create($form_data);



        // $new_comic->title  = $form_data['title'];
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->description = $form_data['description'];
        // $new_comic->price = $form_data['price'];
        // $new_comic->artist = $form_data['artist'];
        // $new_comic->writers = $form_data['writers'];
        // $new_comic->type = $form_data['type'];
        // $new_comic->series = $form_data['series'];
        // $new_comic->sale_date = $form_data['sale_date'];



        // $new_comic->save();
        return redirect()->route('comics.show', $new_comic);
    }
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->fill($form_data);
        $comic->save();
        return redirect()->route('comics.show', $comic);
    }
}
