<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|string|min:5|max:20',
            'author' => 'required|string|min:5|max:20',
            'page' => 'required|gt:0',
            'release' => 'required|date|after:1999-12-31|before:2022-01-01',
        ];
    }
}
