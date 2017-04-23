<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\quanlibaitap;
use App\tbl_quanlingaytap;
use DB;
class QuanlitapluyenController extends TrangchuController {
	
	public function list_quanlibaitap(){
		  	$user = Auth::User();     
			$userId = $user->id;
			$qlt_tl = tbl_quanlingaytap::where("userid",'=',$userId)->get();


     		return view('frontend.quanlibaitap',['qlt_tl'=>$qlt_tl]);	
	}


		public function List_chitietquanlibaitap($id){
					
			$ql_ngaytap=tbl_quanlingaytap::find($id);
         	 $qlbaitap = quanlibaitap::where('idbaitap_ngaytap', '=',$id)->get();
         	
			return view('frontend.chitietluyentap',['qlbaitap'=>$qlbaitap]);
		}
		
		public function get_them_baitap(){
				return view('frontend.thembaitap');
		}

		public function them_baitap(Request $request){
				$ngay = $request->ngay;
				$nhomco = $request->nhomco;
				$ten = $request->ten;
				$khoiluong = $request->khoiluong;
				$solan = $request->so_lan;
				$sohiep = $request->so_hiep;
				// Them ngay thang vao db
				 $ngaytap = new tbl_quanlingaytap();
				 $ngaytap->ngay = $ngay;
				 $ngaytap->nhomco = $nhomco;
				 $ngaytap->userid = Auth::user()->id;
				 $ngaytap->save();
				 $id_ngaytap = $ngaytap->id;
				 $lengthBaitap = count($khoiluong);
				 for($i = 0; $i < $lengthBaitap; $i++){
				 	$baitap = new quanlibaitap();
				 	$baitap->ten = $ten[$i];
				 	$baitap->khoiluong = $khoiluong[$i];
				 	$baitap->so_hiep = $sohiep[$i];
				 	$baitap->so_lan = $solan[$i];
				 	$baitap->idbaitap_ngaytap = $id_ngaytap;
				 	$baitap->save();
				 }
	 				return  redirect("/quanlibaitap");
		}

			public function get_sua_baitap($id){
				$qlbaitap=quanlibaitap::find($id);
				$i=$qlbaitap->idbaitap_ngaytap;
				return view('frontend.chitietluyentap',['$qlbaitap'=>$qlbaitap]);
		}





//them ngay tap
	public function post_themngaytap($id,Request $request){
			$id=Auth::User()->id;
			 $ngay = $request->ngay;
				$nhomco = $request->nhomco;
				$ten = $request->ten;
				$khoiluong = $request->khoiluong;
				$solan = $request->so_lan;
				$sohiep = $request->so_hiep;
				// Them ngay thang vao db
				 $ngaytap = new tbl_quanlingaytap();
				 $ngaytap->ngay = $ngay;
				 $ngaytap->nhomco = $nhomco;
				 $ngaytap->userid = Auth::user()->id;
				 $ngaytap->save();
				 $id_dinnh_duong = $ngaytap->id;
				 $lengthBaitap = count($khoiluong);
				 for($i = 0; $i < $lengthBaitap; $i++){
				 	$baitap = new quanlibaitap();
				 	$baitap->ten = $ten[$i];
				 	$baitap->khoiluong = $khoiluong[$i];
				 	$baitap->so_hiep = $sohiep[$i];
				 	$baitap->so_lan = $solan[$i];
				 	$baitap->idbaitap_ngaytap = $id_dinnh_duong;
				 	$baitap->save();
				 }
	 				return  redirect("/quanlibaitap");
	}


//xoa ngay tap
	public function xoa_ngaytap($id){
				$qltldd = tbl_quanlingaytap::find($id);
		 		$qltldd->delete($id);
		 		return  redirect("/quanlibaitap");
	}
	
//sua ngaytap
	public function sua_ngaytap_get($id){
				$baitap = quanlibaitap::where('idbaitap_ngaytap',$id)->get();
				$ngaytap = tbl_quanlingaytap::find($id);
		 		return view('frontend.suangaytap');
	}
	public function sua_ngaytap($id,Request $request){
				$ngaytap= tbl_quanlingaytap::find($id);	
				$baitap = quanlibaitap::where('idbaitap_ngaytap',$id)->get();

				$ngay = $request->ngay;
				$nhomco = $request->nhomco;
				$ngaytap->ngay = $ngay;
				$ngaytap->nhomco = $nhomco;	
				 $id_ngaytap = $ngaytap->id;
				 $lengthBaitap = count($khoiluong);
				 for($i = 0; $i < $lengthBaitap; $i++){
				 	$baitap = new quanlibaitap();
				 	$baitap->ten = $ten[$i];
				 	$baitap->khoiluong = $khoiluong[$i];
				 	$baitap->so_hiep = $sohiep[$i];
				 	$baitap->so_lan = $solan[$i];
				 	$baitap->idbaitap_ngaytap = $id_ngaytap;
				 	$baitap->save();
				 }
	 				return  redirect("/quanlibaitap");

				$ngaytap->save();
		 	return  redirect("/quanlibaitap");
	}

//sua baitap


	
	
}
?>