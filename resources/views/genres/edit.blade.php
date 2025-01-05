@extends('layouts.app')

@section('title')
    {{ $genre->title }}
@endsection

@section('content')
    <a href="{{ route('genres.index')}}"
       class="inline-block mb-2 px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded shadow hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 transition">
        Back
    </a>
    <div class="container mx-auto mt-8">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Genre</h1>
                <form method="POST" action="{{ route('genres.update', $genre->id) }}" class="space-y-6"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                        <input type="text" name="title" id="title" required value="{{ $genre->title }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    @error('title')
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="flex justify-end">
                        <button type="submit"
                                class="bg-green-500 text-white px-6 py-2 rounded shadow hover:bg-green-600 transition duration-300">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
