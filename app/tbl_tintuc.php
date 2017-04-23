<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_tintuc extends Model {

	//
protected $table="tbl_tintuc";
	public $timestamps=false;
	public function theloaitintuc(){
		return $this->belongsTo('App\tbl_tintuc','idtheloai','id');
	}

}
