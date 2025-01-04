@extends('layouts.app')

@section('title')
    Create film
@endsection

@section('content')
    <div class="container mx-auto mt-8">
        <div class="bg-white shadow rounded-lg overflow-hidden">

            <div class="p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">Create Film</h1>
                <form method="POST" action="{{ route('films.store') }}" class="space-y-6"
                      enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                        <input type="text" name="title" id="title" required value="{{ old('title') }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    @error('title')
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                    <div>
                        <label for="genre_ids" class="block text-sm font-medium text-gray-700">Genres:</label>
                        <select name="genre_ids[]" id="genre_ids" multiple
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @foreach($genres as $genre)
                                <option value="{{ $genre->id }}"
                                        @if(is_array(old('genre_ids'))&& in_array($genre->id, old('genre_ids')))
                                            selected
                                       @endif>
                                    {{ $genre->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('genre_ids')
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="mt-4">
                        <label for="poster" class="block text-sm font-medium text-gray-700">Upload Poster</label>
                        <input type="file" id="file" name="poster"
                               class="mt-2 block w-full text-sm text-gray-700 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    @error('poster')
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror


                    <div class="flex justify-end">
                        <button type="submit"
                                class="bg-green-500 text-white px-6 py-2 rounded shadow hover:bg-green-600 transition duration-300">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
