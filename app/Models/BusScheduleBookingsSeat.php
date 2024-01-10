<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleBookingsSeat
 * 
 * @property int $id
 * @property int|null $booking_id
 * @property int|null $seat_id
 * @property int|null $ticket_id
 * @property int|null $start_location_id
 * @property int|null $end_location_id
 * @property string $is_return
 *
 * @package App\Models
 */
class BusScheduleBookingsSeat extends Model
{
	protected $table = 'bus_schedule_bookings_seats';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'booking_id' => 'int',
		'seat_id' => 'int',
		'ticket_id' => 'int',
		'start_location_id' => 'int',
		'end_location_id' => 'int'
	];

	protected $fillable = [
		'id',
		'booking_id',
		'seat_id',
		'ticket_id',
		'start_location_id',
		'end_location_id',
		'is_return'
	];
}
