<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use App\Enums\Platforms;

class VideogameRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100|unique:videogames',
            'genre' => 'required|string|max:100',
            'release_date' => 'required|date',
            'description' => 'required|string|max:500',
            'rating' => 'required|numeric|min:1|max:5',
            'price' => 'required|numeric|min:1|max:500000',
            'is_multiplayer' => 'required',
            'platform' => ['required', new Enum(Platforms::class)],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [

            'name.required' => 'Debe colocarle un Nombre a al videojuego',
            'name.string' => 'El Nombre del videojuego debe ser un texto',
            'name.max' => 'El Nombre del videojuego no puede tener más de 100 caracteres',
            'genre.required' => 'Debe colocarle un Género al videojuego',
            'genre.string' => 'El Género del videojuego debe ser un texto',
            'genre.max' => 'El Género del videojuego no puede tener más de 100 caracteres',
            'release_date.required' => 'Debe colocarle una Fecha de Lanzamiento al videojuego',
            'release_date.date' => 'La Fecha de Lanzamiento del videojuego debe ser una fecha',
            'description.required' => 'Debe colocarle una Descripción al videojuego',
            'description.string' => 'La Descripción del videojuego debe ser un texto',
            'description.max' => 'La Descripción del videojuego no puede tener más de 255 caracteres',
            'rating.required' => 'Debe colocarle una Calificación al videojuego',
            'rating.numeric' => 'La Calificación del videojuego debe ser un número',
            'rating.min' => 'La Calificación del videojuego no puede ser menor a 1',
            'rating.max' => 'La Calificación del videojuego no puede ser mayor a 5',
            'price.required' => 'Debe colocarle un Precio al videojuego',
            'price.numeric' => 'El Precio del videojuego debe ser un número',
            'price.min' => 'El Precio del videojuego no puede ser menor a 1',
            'price.max' => 'El Precio del videojuego no puede ser mayor a 500000',
            'is_multiplayer.required' => 'Debe colocarle un Modo Multijugador al videojuego',
            'platform.required' => 'Debe colocarle una Plataforma al videojuego',
            'platform.enum' => 'La Plataforma del videojuego debe ser una de las siguientes: PC, PlayStation, Xbox, Nintendo',

        ];
    }
}
