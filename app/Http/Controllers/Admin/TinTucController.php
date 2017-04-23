<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
 	use App\tbl_theloaitintuc;
 	use App\tbl_tintuc;
    class TintucController extends Controller{
 		public function list_tintuc(){
 			$tintuc= tbl_tintuc::orderBy('id','desc')->Paginate(2);;
 			return view ("admin.tintuc",["tintuc"=>$tintuc]);
 		}
 		public function add_tintuc(){
 			$theloai=tbl_theloaitintuc::all();
 			return view("admin.tintuc_add",["theloai"=>$theloai]);
 		}
 		public function post_tintuc(Request $request){
 			$this->validate($request,[
		 		'ten'=>'required|unique:tbl_chitietbomon,ten|min:1|max:50'
		 		],
		 		[
		 			'ten.required'=>"Bạn chưa nhập tên ",
		 			'ten.unique'=>"tên này đã tồn tại",
		 			'ten.min'=>"Tên này có độ dài từ 1 đến 50 kí tự",
		 			'ten.max'=>"Tên này có độ dài từ 1 đến 50 kí tự",
		 		]);

 			$tintuc= new tbl_tintuc();
 			$tintuc->idtheloai=$request->idtheloai;
 			$tintuc->ten=$request->ten;
 			$tintuc->tacgia=$request->tacgia;
 			$tintuc->chitiet=$request->chitiet;

 			if($request->hasFile('hinhanh'))
		 	{
		 		$file=$request->file('hinhanh');
		 		$name=$file->getClientOriginalName();
		 		$hinh= Str_random(5)."_".$name;
		 		while(file_exists("./upload/bomon/".$hinh)){
		 			$hinh= Str_random(5)."_".$name;
		 		}
		 		$file->move("public/upload/bomon",$hinh);
		 		$tintuc->hinhanh="public/upload/bomon/".$hinh; 


		 	}
		 	else
		 	{
		 		$tintuc->hinhanh="";
		 	}
		 	
		 	$tintuc->save();
		 	 return redirect("admin/tintuc/add")->with('thong bao','them thanh cong')->with(['flash_massage'=>"thêm thành công"]);
 		}
 	}
 ?>		