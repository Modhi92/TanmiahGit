<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertRequest extends FormRequest
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
            'active_initiatives_id'=>'nullable |numeric |max:4',
            'picture' => 'required | mimes:jpeg,jpg,png | max:1000',
            'name'=>'required |regex:/^[\pL\s\-]+$/u| max:30 | min:3|unique:Adverts,name,'.$this->get('id'),
        ];
    }

    public function messages()
    {
       return[
           'required'=> 'اكمل جميع الحقول ',
           'mimes'=> 'ادخل الصوره بشكل صحيح ',
           'picture.max'=>'صوره كبيره جداً'

       ];
    }
}
