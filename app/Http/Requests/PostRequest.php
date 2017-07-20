<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'titre'   => 'bail|required|alpha|max:255',
            'contenu' => 'bail|required',
            'year' => 'bail|required|alpha_num|max:4'
            'largeur' => 'alpha_num|max:5'
            'longueur' => 'alpha_num|max:5'
            'hauteur' => 'alpha_num|max:5'
            'categories' => 'bail|required'
            'tags'    => ['Regex:/^[A-Za-z0-9-éèàù]{1,50}?(,[A-Za-z0-9-éèàù]{1,50})*$/']
        ];
    }
}
