<?php
 
namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class UserUpdateRequest extends FormRequest
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
            'name'   => 'bail|required|max:255',
            'country'   => 'bail|required|max:90',
            'city'   => 'bail|required|max:80',
            'email'  => 'bail|required|email|max:255|unique:users,email,' . $this->user->id,
            'avatar' => 'bail|image|dimensions:min_width=150,min_height=150',
            'description' => 'bail|required',
            'specialist' => 'bail|required',
        ];
    }
}