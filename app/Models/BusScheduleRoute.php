<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleRoute
 * 
 * @property int $id
 * @property string $status
 *
 * @package App\Models
 */
class BusScheduleRoute extends Model
{
	protected $table = 'bus_schedule_routes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'status'
	];
}
