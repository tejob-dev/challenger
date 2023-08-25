<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChallengerproStoreRequest extends FormRequest
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
            'nomentr' => ['required', 'max:255', 'string'],
            'typeentr' => ['required', 'max:255', 'string'],
            'telephone' => ['required', 'max:255', 'string'],
            'creation' => ['nullable', 'date'],
            'nompredirig' => ['nullable', 'max:255', 'string'],
            'email' => ['nullable', 'max:255', 'string'],
            'typeprog' => [
                'required',
                'in:programme en cours,programme achevé,programme en démarrage',
            ],
            'objectif' => [
                'required',
                'in:des clients,un marché de construction',
            ],
            'messagacquis' => ['nullable', 'max:255', 'string'],
            'rdventre' => ['required', 'date'],
        ];
    }
}
