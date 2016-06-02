<?php
namespace App\Http\Requests\Users;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditUserRequest extends Request
{
    public function __construct(Route $route)
    {
        $this->route = $route;
    }

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required| unique:users,email,' . $this->route->getParameter('users'),
            'password' => 'min:6| confirmed'
        ];
    }
}