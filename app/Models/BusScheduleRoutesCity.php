<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleRoutesCity
 * 
 * @property int $id
 * @property int|null $route_id
 * @property int|null $city_id
 * @property int|null $order
 *
 * @package App\Models
 */
class BusScheduleRoutesCity extends Model
{
	protected $table = 'bus_schedule_routes_cities';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'route_id' => 'int',
		'city_id' => 'int',
		'order' => 'int'
	];

	protected $fillable = [
		'id',
		'route_id',
		'city_id',
		'order'
	];
}
