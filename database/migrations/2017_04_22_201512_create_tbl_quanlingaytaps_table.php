<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblQuanlingaytapsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_quanlingaytaps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('ngay');
			$table->string('nhomco');
			$table->integer('userid')->unsigned();
			$table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('tbl_quanlingaytaps');
	}

}
