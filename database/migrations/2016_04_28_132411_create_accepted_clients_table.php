<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceptedClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accepted_clients', function(Blueprint $table)
		{
			$table->increments('id')->length(100);
			$table->string('nama_lengkap',255);
			$table->string('jabatan',255);
			$table->string('email',255);
			$table->string('instansi',255);
			$table->string('jenis_instansi',255);
			$table->text('alamat');
			$table->integer('no_tlp')->length(50);
			$table->integer('no_hp')->length(50);
			$table->timestamps('accepted_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('accepted_clients');
	}

}
