<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequest extends FormRequest
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
            'name'=>'required|min:3|max:100'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Il nome è obbligatorio',
            'name.min'=>'Il nome deve contenere almeno :min caratteri',
            'name.max'=>'Il nome deve contenere al massimo :max caratteri',
        ];
    }
}
