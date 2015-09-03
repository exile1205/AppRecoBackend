<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClusterTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cluster_topics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cl_id')->unsigned();
			$table->integer('t_id')->unsigned();
			$table->float('percentage');
			$table->timestamps();
		});
		
		Schema::table('cluster_topics',function($table)
		{
			$table->foreign('cl_id')->references('id')->on('clusters');
			$table->foreign('t_id')->references('id')->on('topics');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cluster_topics');
	}

}
