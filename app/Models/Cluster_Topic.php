<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cluster_Topic extends Model {

	//
	protected $table = 'cluster_topics';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'cl_id','t_id','percentage'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = ['password', 'remember_token'];


}
