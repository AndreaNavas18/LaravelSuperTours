<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusSchedulePluginCountry
 * 
 * @property int $id
 * @property string|null $alpha_2
 * @property string|null $alpha_3
 * @property string $status
 *
 * @package App\Models
 */
class BusSchedulePluginCountry extends Model
{
	protected $table = 'bus_schedule_plugin_country';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'alpha_2',
		'alpha_3',
		'status'
	];
}
