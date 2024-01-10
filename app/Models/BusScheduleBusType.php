<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleBusType
 * 
 * @property int $id
 * @property string|null $seats_map
 * @property int|null $seats_count
 * @property string $status
 *
 * @package App\Models
 */
class BusScheduleBusType extends Model
{
	protected $table = 'bus_schedule_bus_types';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'seats_count' => 'int'
	];

	protected $fillable = [
		'id',
		'seats_map',
		'seats_count',
		'status'
	];
}
