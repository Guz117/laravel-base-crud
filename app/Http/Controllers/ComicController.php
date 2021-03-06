<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{


    protected $validation =  [
        'title' => 'required|max:80',
        'author' => 'required|max:60',
        'page' => 'numeric',
        'image' => 'required',
        'description' => 'required',
        'price' => 'numeric',
        'available' => 'required',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('updated_at', 'desc')->paginate(20);
        $data = [
            'comics' => $comics,
        ];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate($this->validation);
        // dd($request->all());
        $data = $request->all();
        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->author = $data['author'];
        $newComic->page = $data['page'];
        $newComic->image = $data['image'];
        $newComic->description = $data['description'];
        $newComic->price = $data['price'];
        $newComic->available = $data['available'];

        $saved = $newComic->save();

        if (!$saved) {
            dd('note saved');
        }

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $data = [
            'comic' => $comic,
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        return view('comics.edit', ['comic' => $comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validateData = $request->validate($this->validation);

        $data = $request->all();
        $update = $comic->update($data);

        if (!$update) {
            dd('errore');
        }

        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()
            ->route('comics.index')
            ->with('status', "Comic $comic->id deleted!");
    }
}
