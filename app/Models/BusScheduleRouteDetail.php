<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleRouteDetail
 * 
 * @property int $id
 * @property int|null $route_id
 * @property int|null $from_location_id
 * @property int|null $to_location_id
 *
 * @package App\Models
 */
class BusScheduleRouteDetail extends Model
{
	protected $table = 'bus_schedule_route_details';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'route_id' => 'int',
		'from_location_id' => 'int',
		'to_location_id' => 'int'
	];

	protected $fillable = [
		'id',
		'route_id',
		'from_location_id',
		'to_location_id'
	];
}
