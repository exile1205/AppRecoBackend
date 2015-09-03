<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

	//
	protected $table = 'topics';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'name','keyword1','keyword2','keyword3','keyword4','keyword5','keyword6','keyword7','keyword8','keyword9','keyword10'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = ['password', 'remember_token'];


}
