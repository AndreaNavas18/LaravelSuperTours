<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrafficBu
 * 
 * @property int $id
 * @property string $short_name
 * @property string $name
 * @property string $type_bus
 * @property int $capacity
 * @property int|null $id_driver
 *
 * @package App\Models
 */
class TrafficBu extends Model
{
	protected $table = 'traffic_bus';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'capacity' => 'int',
		'id_driver' => 'int'
	];

	protected $fillable = [
		'id',
		'short_name',
		'name',
		'type_bus',
		'capacity',
		'id_driver'
	];
}
