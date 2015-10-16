<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TrainingFormRequest extends Request
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
            //
			'training_name' => 'required|min:3',
			'training_name' => 'required',
			'applying_information'=> 'required|min:10',
			'objectives'=> 'required|min:10',
			'provided_resources'=> 'required|min:10',
			'name' => 'required|min:3',
			'testimonial'=> 'required|min:10',
			'accommodation'=> 'required|min:10',
			'daily_schedule'=> 'required|min:10',
			'fees_structure'=> 'required|min:10',
			'responsible_person'=> 'required|min:10',

        ];
    }
}
