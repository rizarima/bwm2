<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id')->length(200);
			$table->integer('id_user');
			$table->string('email_user', 200);
			$table->string('nama_lengkap', 200);
			$table->string('email',200);
			$table->string('password', 60);
			$table->string('jabatan', 200);
			$table->string('instansi', 200);
			$table->string('jenis_instansi', 200);
			$table->text('alamat');		
			$table->string('fax', 200);
			$table->bigInteger('no_tlp');
			$table->bigInteger('no_hp');
			$table->integer('tanggal');
			$table->integer('bulan');
			$table->integer('tahun');
			$table->string('jenis_pesan', 200);
			$table->rememberToken();
			$table->timestamps('tanggal');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
