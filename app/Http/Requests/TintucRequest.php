<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
class TintucRequest extends Request {

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
			'txtten' => 'required|unique:tintucs,name',
			'txtndhienthi' => 'required',
			'txtndchitiet' => 'required',
			'fileimages' => 'required|image'
		];
	}
	public function messages(){
		return [
			'txtten.required' => 'Tiêu đề không được bỏ trống',
			'txtten.unique' => 'Tiêu đề đã tồn tại',
			'txtndhienthi.required' => 'Nội dung tóm tắt không được bỏ trống',
			'txtndchitiet.required' => 'Nội dung chi tiết không được bỏ trống',
			'fileimages.required' => 'Vui lòng chọn hình ảnh cho bài viết',
			'fileimages.image' => 'Hình ảnh không đúng định dạng'
		];
	}
}
