<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcquereurStoreRequest extends FormRequest
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
            'nompre' => ['required', 'max:255', 'string'],
            'telephone' => ['nullable', 'max:255', 'string'],
            'email' => ['nullable', 'email'],
            'typlog' => ['required', 'in:villa basse,appartement,villa duplex'],
            'emplacement' => ['nullable', 'max:255', 'string'],
            'nbrpiece' => [
                'required',
                'in:studio,2 pièces,3 pièces,4 pièces,plus de 4',
            ],
            'budget' => ['nullable', 'max:255'],
            'apporinit' => ['nullable', 'max:255'],
            'engagannee' => ['nullable', 'max:255'],
            'peopletype' => ['nullable', 'max:255', 'string'],
            'nbrannee' => ['required', 'in:7 ans,10 ans'],
            'result1' => ['nullable', 'max:255', 'string'],
            'result2' => ['nullable', 'max:255', 'string'],
            'result3' => ['nullable', 'max:255', 'string'],
        ];
    }
}
