<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BudgetRequest extends FormRequest
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
            'year'=>'required|size:4|unique:Budgets,year,' . $this->get('id'),
            'amount'=>'required| max:20 |min :5'
        ];
    }

    public function messages()
    {
      return[
          'size'=>' ادخل السنه بشكل صحيح',
          'unique'=>'تم اضافة ميزانية سابقه لهذه السنة'
      ];
    }
}
