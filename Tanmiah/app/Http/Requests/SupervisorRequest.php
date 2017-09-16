<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupervisorRequest extends FormRequest
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
            'name'=>'required |regex:/^[\pL\s\-]+$/u| max:30 | min:3|unique:Supervisors,name,'.$this->get('id'),
            'phone_number'=>'required|regex:/[0-9]{10}/|unique:Supervisors,phone_number,'.$this->get('id'),
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'الاسم مطلوب',
            'name.regex'=>'ادخل الاسم بشكل صحيح',
            'name.max'=>'الاسم يجب ان يكون اقل من ٣٠ حرف',
            'name.min'=>'الاسم يجب ان لايكون اقل من ٣ حروف',
            'name.unique'=>'المدرسة موجودة سابقاً',
            'phone_number.required'=>'رقم الهاتف مطلوب',
            'phone_number.unique'=>'رقم الهاتف موجود سابقاً',
            'phone_number.regex'=>'ادخل رقم الجوال بشكل صحيح',

        ];

    }
}
