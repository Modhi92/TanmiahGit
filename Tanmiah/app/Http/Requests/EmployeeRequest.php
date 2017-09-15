<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name'          =>'required |min:3| max:30',
            'phone_number'=>'required|regex:/[0-9]{10}/|unique:employees,phone_number'.$this->get('id'),
            'Specialization'=>'required ',
            'data_contract' =>'required ',
            'end_contract'  =>'required ',
           // 'email'         =>'required |string|email|max:255|unique:users',
            //'password'      =>'required |required|string|min:6',

        ];
    }
    public function messages()
    {
        return[
            'required'  =>'  اكمل جميع الحقول المطلوبه ',
            'min'       =>'الاسم يجب ان لا يقل عن ٣ احرف  ',
            'max'       =>'الاسم يجب ان لايزيد عن٣٠ احرف ',
            'regex'=>'ادخل رقم الهاتف بشكل صحيح',
          //  'email'     =>'ادخل الايميل بشكل صحيح ',
          //  'email.unique'    =>'الايميل موجود مسبقاً',
            'phone_number.unique'    =>'رقم الجوال موجود مسبقاً',

        ];
    }
}
