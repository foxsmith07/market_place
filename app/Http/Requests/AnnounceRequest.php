<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnounceRequest extends FormRequest
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
            'price' => 'required|numeric',
            'description' => 'required|min:5',
            'category' => 'required',
            'condition' => 'required',
            'image' => 'image',

        ];
    }

    public function messages(){
        return [
            'title.required'=>'il titolo dell\'annuncio è obbligatorio',
            'title.min'=>'il titolo dell\'annuncio deve avere almeno 3 caratteri',
            'price.required'=>'il prezzo dell\'annuncio è obbligatorio',
            'price.numeric'=>'il prezzo dell\'annuncio deve essere di tipo numerico',
            'description.required'=>'il titolo dell\'annuncio è obbligatorio',
            'description.min'=>'la descrizione dell\'annuncio deve avere almeno 5 caratteri',
            'category.required'=>'la categoria dell\'annuncio è obbligatoria',
            'condition.required'=>'la condizione dell\'annuncio è obbligatoria',
            'image.image'=> 'il file da caricare deve essere di tipo immagine',
        ];
    }
}
