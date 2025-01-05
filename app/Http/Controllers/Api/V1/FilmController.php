<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\FilmResource;
use App\Http\Services\Api\V1\FilmService;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function __construct(public FilmService $service)
    {
    }

    public function index(Request $request)
    {
        return FilmResource::collection($this->service->index($request));
    }
    public function show(Film $film)
    {
        return new FilmResource($film);
    }
}
