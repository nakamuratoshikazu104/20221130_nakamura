<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path()=='/'){
            return true;
        } else {
        return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'post_code' => 'required',
            'address' => 'required',
            'content' => 'required'
        ];
    }

public function messages()
{
    return [
        'name.required' => '名前を入力してください',
        'gender.required' => '性別を入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'post_code.required' => '郵便番号を入力してください',
        'address.required' => '住所を入力してください',
        'content.required' => 'ご意見を入力してください',
    ];
}
}