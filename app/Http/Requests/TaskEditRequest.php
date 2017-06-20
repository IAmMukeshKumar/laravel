<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskEditRequest extends TaskCreateRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->rules['start_datetime'] = 'required|date';

        return $this->rules;
    }
}
