<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class TaskCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     *
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
            'title'=>'required|max:25',
            'description'=>'min:10|max:500',
            'start_datetime'=>'required|date|after_or_equal:today',
            'end_datetime'=>'required|date|after:start_datetime',
        ];
    }

}
