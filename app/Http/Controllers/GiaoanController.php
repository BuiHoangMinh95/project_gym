<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\tbl_giaoanbomons;
class GiaoanController extends TrangchuController {

	public function list_quanli(){
		$giaoan = tbl_giaoanbomons::all();
		return view('frontend.Giaoan',['giaoan'=>$giaoan]);
	}
	public function chitietgiaoan($id){
		$giaoan = tbl_giaoanbomons::find($id);
		return view('frontend.chitietgiaoan',['giaoan'=>$giaoan]);
	}

}
