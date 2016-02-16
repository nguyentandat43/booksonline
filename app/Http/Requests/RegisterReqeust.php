<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterReqeust extends Request {

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
			'name' => 'required',
			'email' => 'required|email|unique:users,email',
			'password' => 'required'
		];
	}
	public function messages(){
		return [
			'name.required' => 'Vui lòng nhập tên của bạn',
			'email.required' => 'Vui lòng nhập Email của bạn',
			'email.email' => 'Email không đúng định dạng',
			'email.unique' =>'Email này đã tồn tại',
			'password.required' => 'Vui lòng nhập password'
		];
	}

}
