<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleSeat
 * 
 * @property int $id
 * @property int|null $bus_type_id
 * @property int|null $width
 * @property int|null $height
 * @property int|null $top
 * @property int|null $left
 * @property string|null $name
 *
 * @package App\Models
 */
class BusScheduleSeat extends Model
{
	protected $table = 'bus_schedule_seats';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'bus_type_id' => 'int',
		'width' => 'int',
		'height' => 'int',
		'top' => 'int',
		'left' => 'int'
	];

	protected $fillable = [
		'id',
		'bus_type_id',
		'width',
		'height',
		'top',
		'left',
		'name'
	];
}
