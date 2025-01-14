<?php

namespace App\Http\Services;

use App\Http\Requests\Film\StoreRequest;
use App\Http\Requests\Film\UpdateRequest;
use App\Models\Film;

class FilmService
{
    public function update(UpdateRequest $request, Film $film)
    {
        $data = $request->validated();
        $title = $data['title'];
        $genre_ids = $data['genre_ids'];

        if(isset($data['poster'])){
            $image = ImageService::moveImage($data['poster'], 'images/posters');
            if($film->poster_link != 'posters/default.jpg')
                ImageService::deleteImage('images/'.$film->poster_link);
            $film->poster_link = 'posters/' . $image->getFileName();
        }

        $film->genres()->sync($genre_ids);
        $film->updateOrFail([
            'title' => $title
        ]);

    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $title = $data['title'];
        $genre_ids = $data['genre_ids'];
        $posterLink = '';
        if (!isset($data['poster'])) {
            $posterLink = 'posters/default.jpg';
        } else {
            $newPoster = ImageService::moveImage($data['poster'], 'images/posters');
            $posterLink = 'posters/' . $newPoster->getFilename();
        }
        $film = Film::create([
            'title' => $title,
            'poster_link' => $posterLink,
        ]);
        $film->genres()->attach($genre_ids);
    }

    public function destroy(Film $film)
    {
        $film->genres()->detach();
        if($film->poster_link != 'posters/default.jpg')
            ImageService::deleteImage('images/'.$film->poster_link);
        $film->delete();
    }
    public function publish(Film $film)
    {
        $film->published = 1;
        $film->save();
    }
}
