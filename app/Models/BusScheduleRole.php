<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleRole
 * 
 * @property int $id
 * @property string|null $role
 * @property string $status
 *
 * @package App\Models
 */
class BusScheduleRole extends Model
{
	protected $table = 'bus_schedule_roles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'role',
		'status'
	];
}
