<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainRequest extends FormRequest
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
            'item_name' => 'required|min:3|max:10',
            'item_number' => 'required||max:3',
        ];
    }

    public function messages(){
        return [
            'item_name.required'  => '名前を入力してください。',
            'item_name.min'       => '3moji',
            'item_name.max'       => '10moji',
            'item_number.required'=> '冊数を入力してください。',
            'item_number.max'     => '3moji',
        ];
    }
}
