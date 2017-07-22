<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nom'   => 'bail|required|between:5,30|alpha',
            'objet' => 'bail|required|between:5,45',
            'email' => 'bail|required|email',
            'texte' => 'bail|required|max:400',
        ];
    }
}
