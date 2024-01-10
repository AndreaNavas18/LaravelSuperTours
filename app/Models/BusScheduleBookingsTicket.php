<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleBookingsTicket
 * 
 * @property int $id
 * @property int|null $booking_id
 * @property int|null $ticket_id
 * @property int|null $qty
 * @property float|null $amount
 * @property string $is_return
 *
 * @package App\Models
 */
class BusScheduleBookingsTicket extends Model
{
	protected $table = 'bus_schedule_bookings_tickets';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'booking_id' => 'int',
		'ticket_id' => 'int',
		'qty' => 'int',
		'amount' => 'float'
	];

	protected $fillable = [
		'id',
		'booking_id',
		'ticket_id',
		'qty',
		'amount',
		'is_return'
	];
}
