<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TraineeRequest extends FormRequest
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
            'email' => 'required | email',
            'name' => 'required',
            'internship_start_time' => 'required | date',
            'internship_end_time' => 'required | date | after:internship_start_time',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => trans('validation.required'),
            'name.required' => trans('validation.required'),
            'internship_start_time.required' => trans('validation.required'),
            'internship_end_time.required' => trans('validation.required'),
            'email.email' => trans('validation.email'),
            'internship_start_time.date' => trans('validation.date'),
            'internship_end_time.date' => trans('validation.date'),
            'internship_end_time.after:internship_start_time' => trans('validation.after'),
        ];
    }
}
