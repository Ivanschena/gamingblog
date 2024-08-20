<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
            'title' => 'required|min:3',
            'producer' => 'required|max:55',
            'price' => 'required|numeric',
            'cover' => 'image|mimes:jpg,png',
            'description' => 'required|max:500',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Devi inserire il titolo del gioco coglionazzo',
            'title.min' => 'Il titolo è corto trimone',
            'cover.image' => 'ma secondo te quel file doveva entrare in sto sito eh testa di cazzo va un\' immagine',
            'producer.required' => 'inseriscilo il produttore non fare il braccine corte',
            'description.required' => 'la user experience non te la meriti manco la descrizione del cazzo sai fare',
            'price.numeric' => 'ma secondo te il prezzo a scritte? cazzone di merda manco sugli assegni si usa più scriverlo',

        ];
    }
}
