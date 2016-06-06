<?php

namespace App\Http\Requests\Series;

use App\Http\Requests\Request;

class EditSerieRequest extends Request
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
            'name' => 'required',
            'start_date' => 'required',
            'ending_date' => 'required',
            'user_id' => 'required',
            'week_number' => 'required',
            'category' => 'required'
        ];
    }
}
