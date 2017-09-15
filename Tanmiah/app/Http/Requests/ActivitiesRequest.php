<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivitiesRequest extends FormRequest
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
            'picture'=>'required | mimes:jpeg,jpg,png | max:1000',
            'sub'=>'required ',
            'budget'=>'required | numeric',
            'Expense'=>'required | numeric',
            'manager'=>'required',
            'Remainder'=>'required',
            'Specialization'=>'required',
            'hours'=>'required',
            'Date'=>'required',

        ];
    }
    public function messages()
    {
        return [
            'required' => 'جميع الحقول مطلوبه',
            'mimes'    => 'ادخل الصوره بشكل صحيح ',

        ];
    }
}
