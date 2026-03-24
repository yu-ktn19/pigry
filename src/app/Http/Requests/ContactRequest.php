<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'date' => 'required',
            'body_weight' => 'required|numeric|regex:/^\d{1,4}(\.\d{1})?$/',
            'calorie' => 'required|integer',
            'time' => 'required|date_format:H:i',
            'contact' => 'required|max:120'
        ];
    }

    public function messages()
    {
        return [
            'date.required' => '日付を入力してください',
            'body_weight.required'=> '体重を入力してください',
            'body_weight.numeric'=> '数字で入力してください',
            'body_weight.\d{1,4}'=> '4桁までの数字で入力してください',
            'body_weight.(\.\d{1})?'=> '小数点は1桁で入力してください',
            'calorie.required'=> '摂取カロリーを入力してください',
            'calorie.integer'=> '数字で入力してください',
            'calorie.required'=> '摂取カロリーを入力してください',
            'time.required'=> '運動時間を入力してください',
            'contact.max'=> '120文字以内で入力してください'
        ];
    }
}
