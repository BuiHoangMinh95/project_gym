<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbl_loaibomon;
use Illuminate\Http\Request;

class MainController extends TrangchuController {
	public  function main(){
		return view('frontend.main');
	}
	
}
