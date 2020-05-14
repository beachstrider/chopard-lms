<?php

namespace DLW\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateUserRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email,'.$this->route('user')->id,
            'phone' => 'numeric|min:10',
            'birth' => 'required|date',
            'country' => 'required',
            'city' => 'required',
            'saleschannel' => 'required',
        ];
    }
}
