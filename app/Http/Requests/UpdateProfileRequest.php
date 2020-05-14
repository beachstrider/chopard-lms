<?php

namespace DLW\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'fname' => 'required|max:255',
            'phone' => 'required|min:10',
            'birth' => 'required|date_format:"d/m/Y"',
            'country' => 'required',
            'city' => 'required',
            'saleschannel' => 'required',
        ];
    }
}
