<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleMultiLang
 * 
 * @property int $id
 * @property int|null $foreign_id
 * @property string|null $model
 * @property int|null $locale
 * @property string|null $field
 * @property string|null $content
 * @property string|null $source
 *
 * @package App\Models
 */
class BusScheduleMultiLang extends Model
{
	protected $table = 'bus_schedule_multi_lang';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'foreign_id' => 'int',
		'locale' => 'int'
	];

	protected $fillable = [
		'id',
		'foreign_id',
		'model',
		'locale',
		'field',
		'content',
		'source'
	];
}
