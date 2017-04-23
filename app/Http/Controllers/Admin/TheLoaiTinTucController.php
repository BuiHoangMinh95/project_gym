<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
 	use App\tbl_theloaitintuc;
    class TheLoaiTintucController extends Controller{
 		public function list_TheLoaiTinTuc(){
 			$theloaitintuc= tbl_theloaitintuc::all();
 		
 			return view("admin.theloaitintuc",["theloaitintuc"=>$theloaitintuc]);
 		}
 		public function add_theloaitintuc(){
 			return view("admin.theloaitintuc_add");
 		}
 		public function post_theloaitintuc(Request $request){
 			$theloai =new tbl_theloaitintuc();
 			$theloai->ten= $request->ten;
 			$theloai->save();
 			return redirect("admin/theloaitintuc/add")->with('thong bao','them thanh cong')->with(['flash_massage'=>"thêm thành công"]);
		 
 		}
 		public function delete_theloaitintuc($id){
 			$theloai=tbl_theloaitintuc::find($id);
 			$theloai->delete($id);
 			return redirect("admin/theloaitintuc");
 		}
 		public function edit_theloaitintuc($id){
 			$theloai =tbl_theloaitintuc::find($id);
 			return view("admin/theloaitintuc_edit",["theloai"=>$theloai]);
 		}
 		public function do_edit_theloaitintuc(Request $request,$id){
 			$theloai=tbl_theloaitintuc::find($id);
 			$theloai->ten=$request->ten;
 			$theloai->save();
 			return redirect("admin/theloaitintuc")->with('thong bao','sửa thành công')->with(['flash_massage'=>"sửa thành công"]);
 		}
 	}

?>