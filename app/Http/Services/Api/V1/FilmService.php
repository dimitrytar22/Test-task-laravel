<?php

namespace App\Http\Services\Api\V1;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmService
{

    public function index(Request $request)
    {
        $data = $request->validate([
            'page' => 'integer',
            'per_page' => 'integer'
        ]);
        $page = $data['page'] ?? 1;
        $per_page = $data['per_page'] ?? 10;

        return Film::paginate($per_page, ['*'], 'page', $page);
    }
    public function show(Film $film)
    {
        return $film;
    }
}
