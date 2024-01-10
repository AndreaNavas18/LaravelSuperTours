<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusSchedulePluginLocale
 * 
 * @property int $id
 * @property string|null $language_iso
 * @property string|null $name
 * @property string|null $flag
 * @property string|null $dir
 * @property int|null $sort
 * @property int|null $is_default
 *
 * @package App\Models
 */
class BusSchedulePluginLocale extends Model
{
	protected $table = 'bus_schedule_plugin_locale';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'sort' => 'int',
		'is_default' => 'int'
	];

	protected $fillable = [
		'id',
		'language_iso',
		'name',
		'flag',
		'dir',
		'sort',
		'is_default'
	];
}
