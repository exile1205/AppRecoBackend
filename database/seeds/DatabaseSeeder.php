<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		//$this->call('UserTableSeeder');
		//$this->call('CommentTableSeeder');
		//$this->call('SuckTableSeeder');
		//$this->call('FakerTableSeeder');
		$this->call('ClusterTableSeeder');
		$this->call('TopicTableSeeder');
		$this->call('ClusterTopicTableSeeder');
		$this->call('AppTableSeeder');
		$this->call('BehaviorTableSeeder');
		$this->call('AppBehaviorTableSeeder');
	}

}
