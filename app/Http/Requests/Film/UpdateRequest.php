<?php

namespace App\Http\Requests\Film;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:256',
            'genre_ids' => 'required|array|min:1',
            'genre_ids.*' => 'required|int',
            'poster' => 'image|mimes:jpg,jpeg,png|max:2048',
        ];

    }
    public function  messages()
    {
        return [
            'genre_ids.required' => 'Genre field is required',
            'genre_ids.min' => 'Choose at least 1 genre',
            'genre_ids.*.int' => 'Genre should be an integer',
            'poster.image' => 'Poster should be an image',
            'poster.mimes' => 'Accepted extensions .jpg, .jpeg, .png',
            'poster.max' => 'Max size of poster 2mb'
        ];
    }
}
