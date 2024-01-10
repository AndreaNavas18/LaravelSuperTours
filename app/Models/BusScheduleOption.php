<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusScheduleOption
 * 
 * @property int $foreign_id
 * @property string $key
 * @property int|null $tab_id
 * @property string|null $value
 * @property string|null $label
 * @property string $type
 * @property int|null $order
 * @property int|null $is_visible
 * @property string|null $style
 *
 * @package App\Models
 */
class BusScheduleOption extends Model
{
	protected $table = 'bus_schedule_options';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'foreign_id' => 'int',
		'tab_id' => 'int',
		'order' => 'int',
		'is_visible' => 'int'
	];

	protected $fillable = [
		'foreign_id',
		'key',
		'tab_id',
		'value',
		'label',
		'type',
		'order',
		'is_visible',
		'style'
	];
}
