<?php
use Illuminate\Database\Seeder;
use App\Models\Behavior;

class BehaviorTableSeeder extends Seeder {

	public function run()
	{
		Behavior::create([
			'id'  		=> '1',
			'name'		=> 'Play Game',
			'genre'		=> '1'
		]);
		Behavior::create([
			'id'  		=> '2',
			'name'		=> 'Take Picture',
			'genre'		=> '2'
		]);
		Behavior::create([
			'id'  		=> '3',
			'name'		=> 'Screen',
			'genre'		=> '1'
		]);
		Behavior::create([
			'id'  		=> '4',
			'name'		=> 'Location Access',
			'genre'		=> '1'
		]);
		Behavior::create([
			'id'  		=> '5',
			'name'		=> 'Connect Internet',
			'genre'		=> '2'
		]);

	}
}