<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PickupDropoff2019
 * 
 * @property int $id
 * @property int $id_area
 * @property string $place
 * @property string $address
 * @property int $valid
 * @property int $posicion
 * @property int $pos_exp
 * @property int $trip100
 * @property int $trip200
 * @property int $trip300
 * @property int $trip101
 * @property int $trip201
 * @property int $trip301
 * @property string $type_pick
 * @property int $active_sur
 * @property int $active_web
 * @property int $active_travelag
 * @property int $active_opl
 * @property int $active_oppr
 * @property int $estado
 *
 * @package App\Models
 */
class PickupDropoff2019 extends Model
{
	protected $table = 'pickup_dropoff_2019';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_area' => 'int',
		'valid' => 'int',
		'posicion' => 'int',
		'pos_exp' => 'int',
		'trip100' => 'int',
		'trip200' => 'int',
		'trip300' => 'int',
		'trip101' => 'int',
		'trip201' => 'int',
		'trip301' => 'int',
		'active_sur' => 'int',
		'active_web' => 'int',
		'active_travelag' => 'int',
		'active_opl' => 'int',
		'active_oppr' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'id',
		'id_area',
		'place',
		'address',
		'valid',
		'posicion',
		'pos_exp',
		'trip100',
		'trip200',
		'trip300',
		'trip101',
		'trip201',
		'trip301',
		'type_pick',
		'active_sur',
		'active_web',
		'active_travelag',
		'active_opl',
		'active_oppr',
		'estado'
	];
}
