<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required|max:10000',
            'thumb' => 'required|max:1000',
            'price' => 'required|max:7',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:100',
            'artists' => 'max:5000|nullable',
            'writers' => 'max:5000|nullable',
        ];
    }

    public function messages(): array {

        return [
            'title.required'=> "Devin inserire il titolo",
            'title.max'=> "Devi inserrire massimo :max carateri",

            'description.required'=> "Devi inserire la descrizione",
            'description.max'=> "Devi inserrire massimo :max carateri",

            'thumb.required'=> "Devi inserire l'url dell'immagine",
            'thumb.max'=> "Devi inserrire massimo :max carateri",

            'price.required'=> "Devi inserire il prezzo",
            'price.max'=> "Devi inserrire massimo :max carateri",

            'series.required'=> "Devi inserire la serie",
            'series.max'=> "Devi inserrire massimo :max carateri",

            'sale_date.required'=> "Devi inserire la data di publicazione",
            'sale_date.max'=> "Devi inserrire massimo :max carateri",

            'type.required'=> "Devi inserire la tipologia",
            'type.max'=> "Devi inserrire massimo :max carateri",

            'max'=> "Il campo :attribute deve avere massimo : max caratteri"
        ] ;

    }

    public function attributes(): array{

        return [
            'artists'=>"artisti",
            'writers'=>"scrittori",
        ] ;

    }
}
