<?php
namespace App\Http\Requests\Users;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required| unique:users',
            'password' => 'required| min:6| confirmed'
        ];
    }
}