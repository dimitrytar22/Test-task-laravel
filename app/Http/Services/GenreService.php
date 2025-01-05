<?php

namespace App\Http\Services;

use App\Http\Requests\Genre\StoreRequest;
use App\Http\Requests\Genre\UpdateRequest;
use App\Models\Genre;

class GenreService
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        return Genre::create($data);
    }
    public function  update(UpdateRequest $request, Genre $genre)
    {
        $data = $request->validated();
        return $genre->updateOrFail($data);
    }
    public function destroy(Genre $genre)
    {
        $genre->films()->detach();
        $genre->delete();
    }
}
