<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParraineUpdateRequest extends FormRequest
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
            'nomprep' => ['required', 'max:255', 'string'],
            'eamilp' => ['nullable', 'max:255', 'string'],
            'telephonp' => ['required', 'max:255', 'string'],
            'nomprepp' => ['required', 'max:255', 'string'],
            'emailpp' => ['nullable', 'max:255', 'string'],
            'telephonpp' => ['required', 'max:255', 'string'],
        ];
    }
}
