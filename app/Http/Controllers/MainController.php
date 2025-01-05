<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $lastFilms = Film::query()->orderBy('id','desc')->limit(3)->get();
        return view('welcome', compact('lastFilms'));
    }
}
