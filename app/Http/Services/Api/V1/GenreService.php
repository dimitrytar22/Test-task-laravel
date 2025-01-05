<?php

namespace App\Http\Services\Api\V1;

use App\Http\Resources\Api\V1\FilmResource;
use App\Http\Resources\Api\V1\GenreResource;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreService
{
    public function index(Request $request)
    {
        $data = $request->validate([
            'page' => 'integer',
            'per_page' => 'integer'
        ]);
        $page = $data['page'] ?? 1;
        $per_page = $data['per_page'] ?? 10;

        return  Genre::paginate($per_page, ['*'], 'page', $page);
    }
    public function show(Request $request, Genre $genre)
    {
        $data = $request->validate([
            'page' => 'integer',
            'per_page' => 'integer'
        ]);
        $page = $data['page'] ?? 1;
        $per_page = $data['per_page'] ?? 10;

        return $genre->films()->paginate(perPage: $per_page, page: $page);
    }

}
