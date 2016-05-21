<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('komentars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('idpengguna');
			$table->integer('idfaq');
			$table->string('isi');
			$table->string('hapus');
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
		Schema::drop('komentars');
	}

}
