<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleBooking
 * 
 * @property int $id
 * @property int|null $uuid
 * @property int|null $bus_id
 * @property int|null $pickup_id
 * @property int|null $return_id
 * @property string|null $is_return
 * @property int|null $back_id
 * @property Carbon|null $return_date
 * @property Carbon|null $booking_date
 * @property Carbon|null $bus_departure_date
 * @property string|null $booking_time
 * @property string|null $booking_route
 * @property Carbon|null $booking_datetime
 * @property Carbon|null $stop_datetime
 * @property string|null $code
 * @property float|null $sub_total
 * @property float|null $tax
 * @property float|null $total
 * @property float|null $deposit
 * @property string|null $payment_method
 * @property string|null $status
 * @property string|null $txn_id
 * @property Carbon|null $processed_on
 * @property Carbon|null $created
 * @property string|null $is_sent
 * @property string|null $ip
 * @property string|null $c_title
 * @property string|null $c_fname
 * @property string|null $c_lname
 * @property string|null $c_phone
 * @property string|null $c_email
 * @property string|null $c_company
 * @property string|null $c_notes
 * @property string|null $c_address
 * @property string|null $c_city
 * @property string|null $c_state
 * @property string|null $c_zip
 * @property int|null $c_country
 * @property string|null $cc_type
 * @property string|null $cc_num
 * @property string|null $cc_exp
 * @property string|null $cc_code
 *
 * @package App\Models
 */
class BusScheduleBooking extends Model
{
	protected $table = 'bus_schedule_bookings';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'uuid' => 'int',
		'bus_id' => 'int',
		'pickup_id' => 'int',
		'return_id' => 'int',
		'back_id' => 'int',
		'return_date' => 'datetime',
		'booking_date' => 'datetime',
		'bus_departure_date' => 'datetime',
		'booking_datetime' => 'datetime',
		'stop_datetime' => 'datetime',
		'sub_total' => 'float',
		'tax' => 'float',
		'total' => 'float',
		'deposit' => 'float',
		'processed_on' => 'datetime',
		'created' => 'datetime',
		'c_country' => 'int'
	];

	protected $fillable = [
		'id',
		'uuid',
		'bus_id',
		'pickup_id',
		'return_id',
		'is_return',
		'back_id',
		'return_date',
		'booking_date',
		'bus_departure_date',
		'booking_time',
		'booking_route',
		'booking_datetime',
		'stop_datetime',
		'code',
		'sub_total',
		'tax',
		'total',
		'deposit',
		'payment_method',
		'status',
		'txn_id',
		'processed_on',
		'created',
		'is_sent',
		'ip',
		'c_title',
		'c_fname',
		'c_lname',
		'c_phone',
		'c_email',
		'c_company',
		'c_notes',
		'c_address',
		'c_city',
		'c_state',
		'c_zip',
		'c_country',
		'cc_type',
		'cc_num',
		'cc_exp',
		'cc_code'
	];
}
