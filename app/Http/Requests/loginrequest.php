<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class loginrequest extends Request {

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
		 		
		 			'name'=>'required|min:3|max:50|unique:users,name'
		 		];
	}
	public function messages(){
		return[
					'name.required'=>"bạn chưa nhập tên",
		 			'name.min'=>"tên phải có 3 kí tự trở lên",
		 			'name.max'=>"nhập chưa đúng",
		 			'name.unique'=>"bạn nhập trùng tên",
		 ];
	}

}
