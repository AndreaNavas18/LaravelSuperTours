<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleField
 * 
 * @property int $id
 * @property string|null $key
 * @property string|null $type
 * @property string|null $label
 * @property string|null $source
 * @property Carbon|null $modified
 *
 * @package App\Models
 */
class BusScheduleField extends Model
{
	protected $table = 'bus_schedule_fields';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'modified' => 'datetime'
	];

	protected $fillable = [
		'id',
		'key',
		'type',
		'label',
		'source',
		'modified'
	];
}
