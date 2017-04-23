<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_chitietbomon extends Model {

	//
	protected $table="tbl_chitietbomon";
	public $timestamps=false;
	public function loaibomon(){
		return $this->belongsTo('App\tbl_loaibomon','idmabomon','id');
	}

}
