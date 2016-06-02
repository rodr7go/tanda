<?php

namespace App\Http\Requests\Roles;

use App\Http\Requests\Request;

class EditRoleRequest extends Request
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
            'name'          => 'required',
            'display_name'  => 'required',
            'description'   => 'required'
        ];
    }
}
