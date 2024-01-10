<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleTicket
 * 
 * @property int $id
 * @property int|null $bus_id
 * @property int|null $seats_count
 *
 * @package App\Models
 */
class BusScheduleTicket extends Model
{
	protected $table = 'bus_schedule_tickets';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'bus_id' => 'int',
		'seats_count' => 'int'
	];

	protected $fillable = [
		'id',
		'bus_id',
		'seats_count'
	];
}
