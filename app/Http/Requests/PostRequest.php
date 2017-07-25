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
        $rules = [
            'titre'       => 'bail|required|max:30|regex:/^[\pL\s\-]+$/u',
            'contenu'     => 'bail|required|min:100',
            'year'        => 'bail|required|digits:4',
            'largeur'     => 'sometimes|between:0,5', ['Regex:/^[0-9]+/'],
            'longueur'    => 'sometimes|between:0,5', ['Regex:/^[0-9]+/'],
            'hauteur'     => 'sometimes|between:0,5', ['Regex:/^[0-9]+/'],
            'category_id' => 'required',
            'tags'        => 'sometimes|', ['Regex:/^[A-Za-z0-9-éèàù]{1,50}?(,[A-Za-z0-9-éèàù]{1,50})*$/']
        ];
        $photos = count($this->input('photos'));
        foreach(range(0, $photos) as $index) {
            $rules['photos.' . $index] = 'image|mimes:jpeg,bmp,png|max:2000|dimensions:min_width=400,min_height=400';
        }
 
        return $rules;
    }
}
