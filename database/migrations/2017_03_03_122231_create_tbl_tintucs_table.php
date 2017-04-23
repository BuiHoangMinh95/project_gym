<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTintucsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_tintuc', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('ten');
			$table->string('tacgia');
			$table->longText('chitiet');
			$table->string('hinhanh');
			$table->Integer('idtheloai')->unsigned();
			$table->foreign('idtheloai')->references('id')->on('theloaitintuc')->onDelete('cascade');
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
		Schema::drop('tbl_tintuc');
	}

}
