<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuanlibaitapsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_quanlibaitaps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('ten');
			$table->String('nhom_co');
			$table->integer('khoiluong');
			$table->integer('so_hiep');
			$table->integer('so_lan');
			$table->dateTime('created_at');
			$table->timestamps();
			$table->integer('idbaitap_ngaytap')->unsigned();
			$table->foreign('idbaitap_ngaytap')->references('id')->on('tbl_quanlitapluyenvadinhduong')->onDelete('cascade');
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
		Schema::drop('tbl_quanlibaitaps');
	}

}
