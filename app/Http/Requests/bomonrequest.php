<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class bomonrequest extends Request {

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
		 		
		 			'tenbomon'=>'required|min:3|max:50|unique:tbl_loaibomon,tenbomon'
		 		];
	}
	public function messages(){
		return[
					'tenbomon.required'=>"bạn chưa nhập tên",
		 			'tenbomon.min'=>"tên phải có 3 kí tự trở lên",
		 			'tenbomon.max'=>"nhập chưa đúng",
		 			'tenbomon.unique'=>"bạn nhập trùng tên",
		 ];
	}

}
