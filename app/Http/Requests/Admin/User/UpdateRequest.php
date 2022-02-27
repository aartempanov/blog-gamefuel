<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
      'name' => 'required|string',
      'email' => 'required|string|email|unique:users,email,' . $this->user_id,
      'user_id' => 'required|integer|exists:users,id',
      'profile_image' => 'required|file',
      'cover_image' => 'file',
      'role' => 'required|integer'
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Это поле необходимо для заполнения',
      'name.string' => 'Данные должны соответствовать строчному типу',
      'email.required' => 'Это поле необходимо для заполнения',
      'email.string' => 'Данные должны соответствовать строчному типу',
      'email.email' => 'Это должно иметь формат email (mail@mail.com)',
      'email.unique' => 'Пользователь с таким email уже создан',
      'profile_image.required' => 'Это поле необходимо для заполнения',
      'profile_image.file' => 'Необходимо выбрать файл',
      'cover_image' => 'file',
      'role.required' => 'Это поле необходимо для заполнения',
      'role.integer' => 'Данные должны соответствовать числовому типу'
    ];
  }
}
