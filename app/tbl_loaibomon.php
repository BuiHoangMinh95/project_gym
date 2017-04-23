<?php namespace App;

use Illuminate\Database\Eloquent\Model;
class tbl_loaibomon extends Model {

	//
	protected $table="tbl_loaibomon";
	public $timestamps=false;
	public function chitietbomon()
	{
		return $this->hasMany('App\tbl_chitietbomon','idmabomon','id');
	}
}
