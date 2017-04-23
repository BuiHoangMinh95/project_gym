<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblChitietbomonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_chitietbomon', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ten')->unique();
			$table->string('tacgia');
			$table->longText('chitiet');
			$table->string('hinhanh');
			$table->Integer('idmabomon')->unsigned();
			$table->foreign('idmabomon')->references('id')->on('loaibomon')->onDelete('cascade');
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
		Schema::drop('tbl_chitietbomon');
	}

}
