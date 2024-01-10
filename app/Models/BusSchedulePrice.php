<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusSchedulePrice
 * 
 * @property int $id
 * @property int|null $bus_id
 * @property int|null $ticket_id
 * @property int|null $from_location_id
 * @property int|null $to_location_id
 * @property float|null $price
 * @property string $is_return
 *
 * @package App\Models
 */
class BusSchedulePrice extends Model
{
	protected $table = 'bus_schedule_prices';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'bus_id' => 'int',
		'ticket_id' => 'int',
		'from_location_id' => 'int',
		'to_location_id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'id',
		'bus_id',
		'ticket_id',
		'from_location_id',
		'to_location_id',
		'price',
		'is_return'
	];
}
