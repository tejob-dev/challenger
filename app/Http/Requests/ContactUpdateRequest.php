<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nom_prenom' => ['nullable', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'objet' => ['nullable', 'max:255', 'string'],
            'telephone' => ['nullable', 'max:255', 'string'],
            'message' => ['nullable', 'max:255', 'string'],
        ];
    }
}
