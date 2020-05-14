<?php

namespace DLW\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdminRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:10000|dimensions:max_width=2000,max_height=2000'
        ];
    }
}
