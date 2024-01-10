<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusSchedulePluginLog
 * 
 * @property int $id
 * @property string|null $filename
 * @property string|null $function
 * @property string|null $value
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class BusSchedulePluginLog extends Model
{
	protected $table = 'bus_schedule_plugin_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'created' => 'datetime'
	];

	protected $fillable = [
		'id',
		'filename',
		'function',
		'value',
		'created'
	];
}
