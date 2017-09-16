<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Productive_familyRequest extends FormRequest
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
            'name'=>'required |regex:/^[\pL\s\-]+$/u| max:30 | min:3|unique:Productive_families,name,'.$this->get('id'),
            'phone_number'=>'required|regex:/[0-9]{10}/|unique:Productive_families,phone_number,'.$this->get('id'),
            'Specialization'=>'required | regex:/^[\pL\s\-]+$/u | max:30 | min:3',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'اسم الاسره مطلوب',
            'name.regex'=>'ادخل اسم الاسره بشكل صحيح',
            'name.max'=>'اسم الاسره يجب ان يكون اقل من ٣٠ حرف',
            'name.min'=>'ااسم الاسره يجب ان لايكون اقل من ٣ حروف',
            'name.unique'=>'الاسرة موجودة سابقاً',
            'phone_number.required'=>'رقم الهاتف مطلوب',
            'phone_number.unique'=>'رقم الهاتف موجود سابقاً',
            'phone_number.regex'=>'ادخل رقم الجوال بشكل صحيح',
            'Specialization.required'=>'ادخل اسم التخصص ',
            'Specialization.regex'=>'ادخل التخصص بشكل صحيح',
             'Specialization.max'=>'التخصص يجب ان يكون اقل من ٣٠ حرف',
             'Specialization.min'=>'التخصص يجب ان لايكون اقل من ٣ حروف',


        ];

    }
}
