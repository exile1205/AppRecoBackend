<?php
use Illuminate\Database\Seeder;
use App\Models\Cluster_Topic;

class ClusterTopicTableSeeder extends Seeder {

	public function run()
	{
		Cluster_Topic::create([
			'id'  			=> '1',
			'cl_id'			=> '1',
			't_id'			=> '1',
			'percentage'	=> '0.87'
		]);
		Cluster_Topic::create([
			'id'  			=> '2',
			'cl_id'			=> '1',
			't_id'			=> '2',
			'percentage'	=> '0.6'
		]);
		Cluster_Topic::create([
			'id'  			=> '3',
			'cl_id'			=> '1',
			't_id'			=> '3',
			'percentage'	=> '0.27'
		]);
		Cluster_Topic::create([
			'id'  			=> '4',
			'cl_id'			=> '2',
			't_id'			=> '1',
			'percentage'	=> '0.2'
		]);
		Cluster_Topic::create([
			'id'  			=> '5',
			'cl_id'			=> '2',
			't_id'			=> '2',
			'percentage'	=> '0.9'
		]);
		Cluster_Topic::create([
			'id'  			=> '6',
			'cl_id'			=> '2',
			't_id'			=> '3',
			'percentage'	=> '0.1'
		]);
		Cluster_Topic::create([
			'id'  			=> '7',
			'cl_id'			=> '3',
			't_id'			=> '1',
			'percentage'	=> '0.2'
		]);
		Cluster_Topic::create([
			'id'  			=> '8',
			'cl_id'			=> '3',
			't_id'			=> '2',
			'percentage'	=> '0.3'
		]);
		Cluster_Topic::create([
			'id'  			=> '9',
			'cl_id'			=> '3',
			't_id'			=> '3',
			'percentage'	=> '0.82'
		]);
	}
}