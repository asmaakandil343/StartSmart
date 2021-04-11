<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            'email'=>'required|email|min:10',
            'password'=>'required|string|min:8'
        ];
    }

    public function messages()
    {
        return[
            'email.required' => 'من فضلك ادخل البريد الالكتروني',
            'email.min'=>'الايميل الذي ادخلته غير صحيح',
            'password.required'=>'من فضلك ادخل كلمة المرور',
            'password.min'=>'كلمة المرور التي ادخلتها اقل من 8',
        ];
    }
}
