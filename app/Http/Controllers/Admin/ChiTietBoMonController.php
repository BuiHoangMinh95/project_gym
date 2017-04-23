<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use DB;
	use App\tbl_loaibomon;
	use App\tbl_chitietbomon;
	class ChiTietBoMonController extends Controller{
		public function list_chitietbomon(){
			$chitietbomon=tbl_chitietbomon::orderBy('id','desc')->Paginate(2);
		
			return view("admin.chitietbomon",['chitietbomon'=>$chitietbomon]);
		}
		//ham them
	 	 public function add_chitietbomon(){
	 	 	$loaibomon = tbl_loaibomon::all();
		 	
	 	 	return view("admin.chitietbomon_add",['loaibomon'=>$loaibomon]);
	 	 }
	 	 public function post_chitietbomon(Request $request)
		 {	
		 	//validate 
		 	$this->validate($request,[
		 		'ten'=>'required|unique:tbl_chitietbomon,ten|min:1|max:50'

		 		],
		 		[
		 			'ten.required'=>"Bạn chưa nhập tên ",
		 			'ten.unique'=>"tên này đã tồn tại",
		 			'ten.min'=>"Tên này có độ dài từ 1 đến 50 kí tự",
		 			'ten.max'=>"Tên này có độ dài từ 1 đến 50 kí tự",


		 		]);
		 	
		 	//them chitietbomon
		 	$chitietbomon=new tbl_chitietbomon;

		 	$chitietbomon->ten = $request->ten;
		 	$chitietbomon->tacgia = $request->tacgia;
		 	$chitietbomon->chitiet = $request->chitiet;
		 	$chitietbomon->idmabomon = $request->idmabomon;
		 	//them hinh chi tiet bo mon
		 	if($request->hasFile('hinhanh'))
		 	{
		 		$file=$request->file('hinhanh');
		 		$name=$file->getClientOriginalName();
		 		$hinh= Str_random(5)."_".$name;
		 		while(file_exists("./upload/bomon/".$hinh)){
		 			$hinh= Str_random(5)."_".$name;
		 		}
		 		$file->move("public/upload/bomon",$hinh);
		 		$chitietbomon->hinhanh="public/upload/bomon/".$hinh; 


		 	}
		 	else
		 	{
		 		$chitietbomon->hinhanh="";
		 	}
		 	
		 	$chitietbomon->save();
		 	 return redirect("admin/chitietbomon/add")->with('thong bao','them thanh cong')->with(['flash_massage'=>"thêm thành công"]);
		 }
		 //ham xoa
		   public function delete_chitietbomon($id){
		 		$chitiet = $tbl_chitietbomon::find($id);
		 		$chitiet->delete($id);
		 		return view("admin.chitietbomon")->with('thong bao','xóa thanh cong')->with(['flash_massage'=>"xóa thành công"]);
		   }

	// 	 //ham sua

		   public function edit_chitietbomon($id){
		 		$loaibomon=tbl_loaibomon::all();
		 		$chitietbomon=  tbl_chitietbomon::find($id);
		 			return view("admin.chitietbomon_edit",['loaibomon'=>$loaibomon,'chitietbomon'=>$chitietbomon]);
		 	
		  }

		   public function do_edit_chitietbomon(Request $request,$id){
		 
			$this->validate($request,[
		 		'ten'=>'required|unique:tbl_chitietbomon,ten|min:1|max:50'

		 		],
		 		[
		 			'ten.required'=>"Bạn chưa nhập tên ",
		 			'ten.unique'=>"tên này đã tồn tại",
		 			'ten.min'=>"Tên này có độ dài từ 1 đến 50 kí tự",
		 			'ten.max'=>"Tên này có độ dài từ 1 đến 50 kí tự",


		 		]);
			$chitietbomon=tbl_chitietbomon::find($id);
		 	$chitietbomon->ten = $request->ten;
		 	$chitietbomon->tacgia = $request->tacgia;
		 	$chitietbomon->chitiet = $request->chitiet;
		 	$chitietbomon->idmabomon = $request->idmabomon;
		 	//them hinh chi tiet bo mon
		 	if($request->hasFile('hinhanh'))
		 	{
		 		$file=$request->file('hinhanh');
		 		$name=$file->getClientOriginalName();
		 		$hinh= Str_random(5)."_".$name;
		 		while(file_exists("./upload/bomon/".$hinh)){
		 			$hinh= Str_random(5)."_".$name;
		 		}
		 		$file->move("public/upload/bomon",$hinh);
		 		unlink($chitietbomon->hinhanh);
		 		$chitietbomon->hinhanh="public/upload/bomon/".$hinh;
		 	}
		 
		 	$chitietbomon->save();
		 	return redirect("admin/chitietbomon")->with('thong bao','sua thanh cong')->with(['flash_massage'=>"sua thành công"]);
	  }
	 }
   

?>