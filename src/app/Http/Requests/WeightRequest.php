<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeightRequest extends FormRequest
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
            'weight' => 'required|numeric|regex:/^\d{1,4}(\.\d{1})?$/',
            'target_weight' => 'required|numeric|regex:/^\d{1,4}(\.\d{1})?$/'
        ];
    }
    
    public function messages()
    {
        return [
            'weight.required' => '体重を入力してください',
            'weight.numeric'=> '数字で入力してください',
            'weight.\d{1,4}'=> '4桁までの数字で入力してください',
            'weight.(\.\d{1})?'=> '小数点は1桁で入力してください',
            'target_weight.required' => '体重を入力してください',
            'target_weight.numeric'=> '数字で入力してください',
            'target_weight.\d{1,4}'=> '4桁までの数字で入力してください',
            'target_weight.(\.\d{1})?'=> '小数点は1桁で入力してください'
        ];
    }
}
