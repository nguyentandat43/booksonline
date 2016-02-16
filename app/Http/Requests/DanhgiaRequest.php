<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DanhgiaRequest extends Request {

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
			'email' => 'required|email',
			'content' => 'required|min:20'
		];
	}
	public function messages(){
		return [
			'name.required' => 'Vui lòng nhập tên của bạn',
			'email.required' => 'Vui lòng nhập email của bạn',
			'email.email' =>'Email không đúng định dạng',
			'content.required' => 'Vui lòng nhập nội dung liên hệ',
			'content.min' => 'Nội dụng phải lớn hơn 20 kí tự'
		];
	}

}
