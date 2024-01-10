<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PickupDropoffSuper
 * 
 * @property int $id
 * @property int $id_area
 * @property string $place
 * @property string $address
 * @property int $valid
 * @property int $posicion
 * @property int $type_web
 * @property int $active_web
 *
 * @package App\Models
 */
class PickupDropoffSuper extends Model
{
	protected $table = 'pickup_dropoff_super';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_area' => 'int',
		'valid' => 'int',
		'posicion' => 'int',
		'type_web' => 'int',
		'active_web' => 'int'
	];

	protected $fillable = [
		'id',
		'id_area',
		'place',
		'address',
		'valid',
		'posicion',
		'type_web',
		'active_web'
	];
}
