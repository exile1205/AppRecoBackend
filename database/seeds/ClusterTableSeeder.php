<?php
use Illuminate\Database\Seeder;
use App\Models\Cluster;

class ClusterTableSeeder extends Seeder {

	public function run()
	{
		Cluster::create([
			'id'  			=> '1',
			'parent_id'		=> null,
			'node'			=> '1',
			'x'				=> '1',
			'y'				=> '1',
			'layer'			=> '2',
		]);
		Cluster::create([
			'id'  			=> '2',
			'parent_id'		=> '1',
			'node'			=> '1',
			'x'				=> '1',
			'y'				=> '2',
			'layer'			=> '3',
		]);
		Cluster::create([
			'id'  			=> '3',
			'parent_id'		=> '1',
			'node'			=> '1',
			'x'				=> '2',
			'y'				=> '1',
			'layer'			=> '3',
		]);

	}
}