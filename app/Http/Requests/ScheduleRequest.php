<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ScheduleRequest extends Request
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
            'schedule_start'=>'required|date_format:d/m/Y',
            'schedule_end'=>'required|date_format:d/m/Y',
            'event'=>'required',
            'special_day'=>'required',

        ];
    }
}
