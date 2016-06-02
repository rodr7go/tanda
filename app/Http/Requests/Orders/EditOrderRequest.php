<?php

namespace App\Http\Requests\Orders;

use App\Http\Requests\Request;

class EditOrderRequest extends Request
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
            'user_id' => 'required|integer|min:1',
            'product' => 'required',
            'page'    => 'required',
            'model'   => 'required',
            'id_product'=> 'required',
            'numb_size' => 'required',
            'store_cost' => 'required',
            'client_cost' => 'required',
            'weekly_amount' => 'required'
        ];
    }
}
