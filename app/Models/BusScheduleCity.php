<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleCity
 * 
 * @property int $id
 * @property string $status
 *
 * @package App\Models
 */
class BusScheduleCity extends Model
{
	protected $table = 'bus_schedule_cities';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'status'
	];
}
