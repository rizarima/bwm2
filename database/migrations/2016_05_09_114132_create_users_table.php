<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id',200);
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('jabatan', 200);
			$table->enum('jenis_kelamin', array('laki-laki','perempuan'));
			$table->string('tanggal_lahir', 255);
			$table->text('alamat');
			$table->bigInteger('no_tlp')->length(50);
			$table->bigInteger('no_hp')->length(50);
			$table->string('status', 100);
			$table->string('no_fax', 100);
			$table->string('kota', 100);
			$table->string('negara', 100);
			$table->string('kode_pos', 100);
			$table->string('about', 100);
			$table->string('roles');
			$table->text('p_profil');
			$table->text('p_background');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
