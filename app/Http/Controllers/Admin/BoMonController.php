<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Http\Requests\bomonrequest;
	use App\tbl_loaibomon;
	class BoMonController extends Controller{
		public function list_bomon(){
			$loaibomon=tbl_loaibomon::orderBy('id','desc')->Paginate(2);
			return view("admin.bomon",['loaibomon'=>$loaibomon]);
		}
		//ham them
		 // public function add_bomon(){
		 	
		 // 	return view("admin.bomon_add");
		 // }
		 public function post_bomon(bomonrequest $request)
		 {	
		 	
		 	$loaibomon=new tbl_loaibomon;
		 	$loaibomon->tenbomon = $request->tenbomon;
		 	$loaibomon->save();
		 	 return redirect("admin/bomon/add")->with('thong bao','them thanh cong')->with(['flash_massage'=>"thêm thành công"]);
		 }
		 //ham xoa
		  public function delete_bomon($id){
		 	$loaibomon=tbl_loaibomon::find($id);
		 	$loaibomon->delete($id);
		 	return redirect("admin/bomon");
		  }

		 //ham sua

		   public function edit_bomon($id){
		 		$loaibomon=tbl_loaibomon::findorFail($id)->toArray();

		 			return view("admin.bomon_edit",['loaibomon'=>$loaibomon]);
		 	
		  }

		   public function do_edit_bomon(Request $request,$id){
		   		$loaibomon=tbl_loaibomon::find($id);
		   		$loaibomon->tenbomon = $request->tenbomon;
		   		$loaibomon->save();
		 		return redirect("admin/bomon/")->with('thong bao','sửa thanh công')->with(['flash_massage'=>"sửa thành công"]);
		 	
		  }
	}
   

?>