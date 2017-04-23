<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblGiaoanbomonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_giaoanbomons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('ten');
			$table->String('hinhanh');
			$table->String('tacgia');
			$table->longText('noidung');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_giaoanbomons');
	}

}
