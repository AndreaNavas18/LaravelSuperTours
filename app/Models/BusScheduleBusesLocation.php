<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleBusesLocation
 * 
 * @property int $id
 * @property int|null $bus_id
 * @property int|null $location_id
 * @property Carbon|null $departure_time
 * @property Carbon|null $arrival_time
 *
 * @package App\Models
 */
class BusScheduleBusesLocation extends Model
{
	protected $table = 'bus_schedule_buses_locations';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'bus_id' => 'int',
		'location_id' => 'int',
		'departure_time' => 'datetime',
		'arrival_time' => 'datetime'
	];

	protected $fillable = [
		'id',
		'bus_id',
		'location_id',
		'departure_time',
		'arrival_time'
	];
}
