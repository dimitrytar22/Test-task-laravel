<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\FilmResource;
use App\Http\Resources\Api\V1\GenreResource;
use App\Http\Services\Api\V1\GenreService;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function __construct(public GenreService $service)
    {
    }

    public function index(Request $request)
    {
        return GenreResource::collection($this->service->index($request));
    }

    public function show(Request $request, Genre $genre)
    {
        return FilmResource::collection($this->service->show($request,$genre));
    }

}
