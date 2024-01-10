<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleBus
 * 
 * @property int $id
 * @property int|null $route_id
 * @property int|null $bus_type_id
 * @property Carbon|null $start_date
 * @property Carbon|null $end_date
 * @property Carbon|null $departure_time
 * @property Carbon|null $arrival_time
 * @property string|null $recurring
 * @property string|null $set_seats_count
 * @property float|null $discount
 *
 * @package App\Models
 */
class BusScheduleBus extends Model
{
	protected $table = 'bus_schedule_buses';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'route_id' => 'int',
		'bus_type_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'departure_time' => 'datetime',
		'arrival_time' => 'datetime',
		'discount' => 'float'
	];

	protected $fillable = [
		'id',
		'route_id',
		'bus_type_id',
		'start_date',
		'end_date',
		'departure_time',
		'arrival_time',
		'recurring',
		'set_seats_count',
		'discount'
	];
}
