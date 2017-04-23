<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class quanlibaitap extends Model {

		
	protected $table="tbl_quanlibaitap";
	public $timestamps=false;
	protected $fillable = ['ten', 'khoiluong', 'so_hiep', 'so_lan', 'idbaitap', 'idbaitap_ngaytap'];
	
	public function quanlingaytap()
	{
		return $this->belongsTo('App\tbl_quanlingaytap','idbaitap_ngaytap','id');
	}


}
