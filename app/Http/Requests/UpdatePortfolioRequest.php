<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePortfolioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'min: 5', 'max: 200'],
            'description' => ['nullable', 'max: 500']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il titolo è da inserire obbligatoriamente",
            'title.min' => "Il titolo deve contenere minimo 5 caratteri",
            'title.max' => "Il titolo deve contenere massimo 200 caratteri",
            'description.max' => "la descrizione deve contenere al massimo 500 caratteri"
        ];
    }
}
