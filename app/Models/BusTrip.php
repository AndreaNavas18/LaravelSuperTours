<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusTrip
 * 
 * @property int|null $id_bus
 * @property int|null $id_trips
 *
 * @package App\Models
 */
class BusTrip extends Model
{
	protected $table = 'bus_trips';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_bus' => 'int',
		'id_trips' => 'int'
	];

	protected $fillable = [
		'id_bus',
		'id_trips'
	];
}
