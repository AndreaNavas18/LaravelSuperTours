<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusSchedulePluginOneAdmin
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $url
 * @property string|null $email
 * @property string|null $password
 *
 * @package App\Models
 */
class BusSchedulePluginOneAdmin extends Model
{
	protected $table = 'bus_schedule_plugin_one_admin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'id',
		'name',
		'url',
		'email',
		'password'
	];
}
