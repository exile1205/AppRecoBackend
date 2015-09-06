<?php
use Illuminate\Database\Seeder;
use App\Models\Cluster;

class ClusterTableSeeder extends Seeder {

	public function run()
	{
		Cluster::create([
			'id'  			=> '1',
			'cluster'		=> '1',
			'subcluster'	=> '2',
			'x'				=> '1',
			'y'				=> '1',
			'radar_chart'	=> 'link1',
		]);
		Cluster::create([
			'id'  			=> '2',
			'cluster'		=> '1',
			'subcluster'	=> '4',
			'x'				=> '1',
			'y'				=> '2',
			'radar_chart'	=> 'link2',
		]);
		Cluster::create([
			'id'  			=> '3',
			'cluster'		=> '2',
			'subcluster'	=> '4',
			'x'				=> '2',
			'y'				=> '2',
			'radar_chart'	=> 'link3',
		]);

	}
}