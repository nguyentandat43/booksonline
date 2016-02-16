<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

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
			'parentid' 			=>'numeric',
			'txtten' 			=> 'required|unique:products,name',
			'txtgia' 			=> 'required|numeric',
			'txtgiasale' 		=> 'numeric',
			'txtndhienthi' 		=> 'required',
			'txtndchitiet'		=> 'required',
			'fileimages' 		=>'required|image'
		];
	}
	public function messages(){
		return [
			'parentid.numeric' => 'Vui lòng chọn danh mục',
			'txtten.required' => 'Vui lòng nhập tên sản phẩm',
			'txtten.unique' => 'Tên sàn phẩm này đã tồn tại',
			'txtgia.required' => 'Vui lòng nhập giá cho sản phẩm',
			'txtgia.numeric' => 'Giá phải là số',
			'txtgiasale.numeric' =>'Giá khuyến mại phải là số',
			'txtndhienthi.required' => 'Vui lòng nhập nổi dung tóm tắt',
			'txtndchitiet.required' => 'Vui lòng nhập nổi dung chi tiết',
			'fileimages.required' => 'Vui lòng chọn ảnh cho sản phẩm',
			'fileimages.image' => 'Hình ảnh không đúng định dạng'
		];
	}

}
