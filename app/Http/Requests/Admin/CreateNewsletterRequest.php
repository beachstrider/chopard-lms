<?php

namespace DLW\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsletterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'content' => 'required'
        ];
    }
}
