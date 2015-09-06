<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cluster extends Model {

	//
	//
	protected $table = 'clusters';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'parent_id','node','x','y','layer'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = ['password', 'remember_token'];

}
