<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleUser
 * 
 * @property int $id
 * @property int $role_id
 * @property string|null $email
 * @property string|null $password
 * @property string|null $name
 * @property string|null $phone
 * @property Carbon $created
 * @property Carbon|null $last_login
 * @property string $status
 * @property string $is_active
 * @property string|null $ip
 *
 * @package App\Models
 */
class BusScheduleUser extends Model
{
	protected $table = 'bus_schedule_users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'role_id' => 'int',
		'created' => 'datetime',
		'last_login' => 'datetime'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'id',
		'role_id',
		'email',
		'password',
		'name',
		'phone',
		'created',
		'last_login',
		'status',
		'is_active',
		'ip'
	];
}
