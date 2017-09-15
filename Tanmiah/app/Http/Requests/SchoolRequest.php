<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolRequest extends FormRequest
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
            'name'=>'required |regex:/^[\pL\s\-]+$/u| max:30 | min:3|unique:Schools,name,'.$this->get('id'),
            'phone_number'=>'required|regex:/[0-9]{10}/|unique:Schools,phone_number,'.$this->get('id'),
            'manager'=>'required |regex:/^[\pL\s\-]+$/u| max:30 | min:3',
            'Supervisor'=>'required | regex:/^[\pL\s\-]+$/u | max:30 | min:3',
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
            'manager.required'=>'ادخل اسم المدير',
            'Supervisor.required'=>'ادخل اسم المشرفة ',
            'manager.regex'=>'ادخل اسم المدير بشكل صحيح ',
            'Supervisor.regex'=>'ادخل اسم المشرف بشكل صحيح',
            'manager.max'=>'اسم المدير يجب ان يكون اقل من ٣٠ حرف',
            'Supervisor.max'=>'اسم المشرف يجب ان يكون اقل من ٣٠ حرف',
            'manager.min'=>'اسم المدير يجب ان لايكون اقل من ٣ حروف',
            'Supervisor.min'=>'اسم المشرف يجب ان لايكون اقل من ٣ حروف',


        ];

    }
}
