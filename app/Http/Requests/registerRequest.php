<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'name'          => ['required', 'string','max:255'],
            'email'         => ['required', 'string', 'email','min:10','max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:8', 'confirmed'],
            'gender'        => ['required', 'string'],
            'type_blood'    => ['required', 'string'],
            'nationality'   => ['required', 'string'],
            'phone_number'  => ['required', 'number','unique:users'],
            'address'       => ['required', 'string'],
            'about'         => ['required', 'string'],
            'role'          => ['required', 'string'],
        ];
    }
    public function messages()
    {
        return [
            'name.required'     =>  'من فضلك ادخل الاسم',

            'email.required'    =>  'من فضلك ادخل البريد الالكتروني',
            'email.min'         =>  'الايميل الذي ادخلته غير صحيح',
            'email.unique'      =>  'البريد الالكتروني هذا مستخدم من قبل',

            'password.required' =>  'من فضلك ادخل كلمة المرور',
            'password.min'      =>  'كلمة المرور التي ادخلتها اقل من 8',

            'gender.required'   =>  'يجب ادخال النوع',
            'gender.string'     =>  'القيمة التي ادخلتها غير صحيحة',
        ];
    }
}
