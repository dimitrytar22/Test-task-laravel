<?php

namespace App\Http\Controllers;

use App\Http\Requests\Film\StoreRequest;
use App\Http\Requests\Film\UpdateRequest;
use App\Http\Services\FilmService;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function __construct(public FilmService $service)
    {
    }

    public function  index()
    {
        $films = Film::paginate(10);
        return view('films.index', compact('films'));
    }
    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('films.create', compact('genres'));
    }
    public function store(StoreRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('films.index')->with('success', 'Film created successfully!');
    }
    public function edit(Film $film)
    {
        $genres = Genre::all();
        return view('films.edit', compact('film', 'genres'));
    }
    public function update(UpdateRequest $request, Film $film)
    {
        $this->service->update($request,$film);
        return redirect()->route('films.index')->with('success', 'Film updated successfully!');
    }
    public function destroy(Film $film)
    {
        $this->service->destroy($film);
        return redirect()->route('films.index')->with('success', 'Film was deleted successdully!');
    }

    public function publish(Film $film)
    {
        $this->service->publish($film);
        return redirect()->route('films.show', $film->id)->with('success', 'Film published successfully!');
    }
}
