<?php
use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicTableSeeder extends Seeder {

	public function run()
	{
		Topic::create([
			'id'  			=> '1',
			'name'			=> 'social',
			'keyword1'		=> 'facebook',
			'keyword2'		=> 'twitter',
			'keyword3'		=> 'fb',
			'keyword4'		=> 'instgram',
			'keyword5'		=> 'social',
			'keyword6'		=> 'follow',
			'keyword7'		=> 'shared',
			'keyword8'		=> 'network',
			'keyword9'		=> 'weibo',
			'keyword10'		=> 'google'
		]);
		Topic::create([
			'id'  			=> '2',
			'name'			=> 'sports',
			'keyword1'		=> 'baseball',
			'keyword2'		=> 'basketball',
			'keyword3'		=> 'tennis',
			'keyword4'		=> 'ball',
			'keyword5'		=> 'soccer',
			'keyword6'		=> 'football',
			'keyword7'		=> 'lakers',
			'keyword8'		=> 'yankess',
			'keyword9'		=> 'redsox',
			'keyword10'		=> 'shoot'
		]);
		Topic::create([
			'id'  			=> '3',
			'name'			=> 'computing',
			'keyword1'		=> 'hadoop',
			'keyword2'		=> 'cloud',
			'keyword3'		=> 'spark',
			'keyword4'		=> 'hbase',
			'keyword5'		=> 'storm',
			'keyword6'		=> 'aws',
			'keyword7'		=> 'azure',
			'keyword8'		=> 'hdinsight',
			'keyword9'		=> 'using',
			'keyword10'		=> 'shoot'
		]);

	}
}