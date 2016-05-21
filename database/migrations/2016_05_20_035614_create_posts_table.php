<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id',200);
			$table->bigInteger('id_user')->length(50);
			$table->string('username');
			$table->string('tittle');
			$table->text('sampul');
			$table->text('isi');	
			$table->integer('tanggal');
			$table->integer('bulan');	
			$table->string('tahun',4);
			$table->string('kategori');
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
		Schema::drop('posts');
	}

}
