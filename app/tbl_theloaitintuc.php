<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_theloaitintuc extends Model {

	protected $table="tbl_theloaitintuc";
	public $timestamps=false;
	public function tintuc()
	{
		return $this->hasMany('App\tbl_tintuc','idtheloai','id');
	}

}
