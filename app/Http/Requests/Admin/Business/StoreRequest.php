<?php

namespace App\Http\Requests\Admin\Business;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|string',
            'account'=>'required|string',
            'BIN'=>'required|string|unique:businesses',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|string',
        ];
    }
    public function messages()
    {

        return [
            'title.required'=> 'Это поле необходимо для заполнения',
            'title.string'=>'Данные должны соответствовать строчному типу',
            'account.string'=>'Данные должны соответствовать строчному типу',
            'password.string'=>'Данные должны соответствовать строчному типу',
            'BIN.required'=> 'Это поле необходимо для заполнения',
            'email.required'=> 'Это поле необходимо для заполнения',
            'password.required'=> 'Это поле необходимо для заполнения',
            'BIN.string'=>'Данные должны соответствовать строчному типу',
            'email.string'=>'Данные должны соответствовать строчному типу',
            'email.email'=> 'Ваша почта должна соответствовать формату  @mail.ru',
            'email.unique'=>'Пользователь с вашим email уже существует',
            'BIN.unique'=>'Пользователь с вашим БИН уже существует',
        ];    }
}
