<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusSchedulePluginLogConfig
 * 
 * @property int $id
 * @property string|null $filename
 *
 * @package App\Models
 */
class BusSchedulePluginLogConfig extends Model
{
	protected $table = 'bus_schedule_plugin_log_config';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'filename'
	];
}
