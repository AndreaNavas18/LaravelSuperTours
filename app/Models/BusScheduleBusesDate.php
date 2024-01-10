<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleBusesDate
 * 
 * @property int $id
 * @property int|null $bus_id
 * @property Carbon|null $date
 *
 * @package App\Models
 */
class BusScheduleBusesDate extends Model
{
	protected $table = 'bus_schedule_buses_dates';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'bus_id' => 'int',
		'date' => 'datetime'
	];

	protected $fillable = [
		'id',
		'bus_id',
		'date'
	];
}
