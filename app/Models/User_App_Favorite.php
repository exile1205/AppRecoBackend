<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_App_Favorite extends Model {

	//
	//
	protected $table = 'user__app__favorite';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','u_id','a_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = ['password', 'remember_token'];
}
