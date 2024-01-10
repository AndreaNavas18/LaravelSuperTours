<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleBookingsPayment
 * 
 * @property int $id
 * @property int|null $booking_id
 * @property string|null $payment_method
 * @property string|null $payment_type
 * @property float|null $amount
 * @property string|null $status
 *
 * @package App\Models
 */
class BusScheduleBookingsPayment extends Model
{
	protected $table = 'bus_schedule_bookings_payments';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'booking_id' => 'int',
		'amount' => 'float'
	];

	protected $fillable = [
		'id',
		'booking_id',
		'payment_method',
		'payment_type',
		'amount',
		'status'
	];
}
