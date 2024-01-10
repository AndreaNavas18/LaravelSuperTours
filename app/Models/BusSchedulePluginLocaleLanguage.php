<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusSchedulePluginLocaleLanguage
 * 
 * @property int $id
 * @property string|null $iso
 * @property string|null $title
 * @property string|null $region
 * @property string|null $native
 * @property string|null $dir
 * @property string|null $country_abbr
 * @property string|null $language_abbr
 * @property string|null $file
 *
 * @package App\Models
 */
class BusSchedulePluginLocaleLanguage extends Model
{
	protected $table = 'bus_schedule_plugin_locale_languages';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'iso',
		'title',
		'region',
		'native',
		'dir',
		'country_abbr',
		'language_abbr',
		'file'
	];
}
