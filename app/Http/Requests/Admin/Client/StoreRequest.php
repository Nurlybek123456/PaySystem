<?php

namespace App\Http\Requests\Admin\Client;

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
            'surname'=>'required|string',
            'name'=>'required|string',
            'patronymic'=>'required|string',
            'balance'=>'string|nullable',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|string',
        ];
    }
    public function messages()
    {
        return [
            'surname.required'=> 'Это поле необходимо для заполнения',
            'name.required'=> 'Это поле необходимо для заполнения',
            'patronymic.required'=> 'Это поле необходимо для заполнения',
            'surname.string'=>'Данные должны соответствовать строчному типу',
            'name.string'=>'Данные должны соответствовать строчному типу',
            'patronymic.string'=>'Данные должны соответствовать строчному типу',
            'balance.string'=>'Данные должны соответствовать строчному типу',
            'balance.required'=> 'Это поле необходимо для заполнения',
            'password.string'=>'Данные должны соответствовать строчному типу',
            'password.required'=> 'Это поле необходимо для заполнения',
            'email.required'=> 'Это поле необходимо для заполнения',
            'email.string'=>'Данные должны соответствовать строчному типу',
            'email.email'=> 'Ваша почта должна соответствовать формату  @mail.ru',
            'email.unique'=>'Пользователь с вашим email уже существует',
            ];
    }
}
