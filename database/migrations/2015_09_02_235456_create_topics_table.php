<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',60);
			$table->string('keyword1',60);
			$table->string('keyword2',60);
			$table->string('keyword3',60);
			$table->string('keyword4',60);
			$table->string('keyword5',60);
			$table->string('keyword6',60);
			$table->string('keyword7',60);
			$table->string('keyword8',60);
			$table->string('keyword9',60);
			$table->string('keyword10',60);
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
		Schema::drop('topics');
	}

}
