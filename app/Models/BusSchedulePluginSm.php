<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusSchedulePluginSm
 * 
 * @property int $id
 * @property string|null $number
 * @property string|null $text
 * @property string|null $status
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class BusSchedulePluginSm extends Model
{
	protected $table = 'bus_schedule_plugin_sms';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'created' => 'datetime'
	];

	protected $fillable = [
		'id',
		'number',
		'text',
		'status',
		'created'
	];
}
