<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\StoreRequest;
use App\Http\Requests\Genre\UpdateRequest;
use App\Http\Services\GenreService;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function __construct(public GenreService $service)
    {
    }

    public function index()
    {
        $genres = Genre::paginate(10);
        return view('genres.index', compact('genres'));
    }
    public function create()
    {
        return view('genres.create');
    }
    public function store(StoreRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('genres.index')->with('success', 'Genre created successfully!');
    }
    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }
    public function update(UpdateRequest $request, Genre $genre)
    {
        $this->service->update($request,$genre);
        return redirect()->route('genres.index')->with('success', 'Genre updated successfully!');
    }
    public function show(Genre $genre)
    {
        return view('genres.show', compact('genre'));
    }
    public function destroy(Genre $genre)
    {
        $this->service->destroy($genre);
        return redirect()->route('genres.index')->with('success', 'Genre deleted successfully!');
    }
}
