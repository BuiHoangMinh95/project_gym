<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\tbl_giaoanbomons;
	class GiaoanController extends Controller{

		public function list_giaoan(){
			$giaoan=tbl_giaoanbomons::orderBy('id','desc')	->Paginate(2);
			return view("admin.giaoan",['giaoan'=>$giaoan ]);
		}
		//ham them
		 public function add_giaoan(){
		 	
		 	return view("admin.giaoan_add");
		 }
		 public function post_giaoan(Request $request)
		 {	
		 	
		 	$giaoan=new tbl_giaoanbomons;
		 	$giaoan->ten = $request->ten;
		 	$giaoan->tacgia = $request->tacgia;
		 	$giaoan->noidung = $request->noidung;
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
		 		$giaoan->hinhanh="public/upload/bomon/".$hinh; 


		 	}
		 	else
		 	{
		 		$giaoan->hinhanh="";
		 	}
		 	
		 	
		 	$giaoan->save();
		 	 return redirect("admin/giaoan/add")->with('thong bao','them thanh cong')->with(['flash_massage'=>"thêm thành công"]);
		 }

	}

?>