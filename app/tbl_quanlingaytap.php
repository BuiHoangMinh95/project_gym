<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_quanlingaytap extends Model {

	public $timestamps=false;
	protected $table="tbl_quanlingaytap";
	public $dateFormat ='d/m/Y';

	protected $fillable = ['ngay', 'nhomco'];
	public function ngaytap()
	{
		return $this->belongsTo('App\User','userid','id');
	}
	public function quanlibaitap()
	{
		return $this->hasMany('App\quanlibaitap','idbaitap_ngaytap','id');
	}

}
