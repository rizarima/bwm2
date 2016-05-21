<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFAQSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('f_a_q_s', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username',200);
			$table->string('email',200);
			$table->string('subject', 200);
			$table->text('isi');
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
		Schema::drop('f_a_q_s');
	}

}
