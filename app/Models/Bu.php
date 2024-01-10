<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bu
 * 
 * @property int $id
 * @property string|null $plate
 * @property string|null $tipobus
 * @property int|null $capacidad
 * @property string|null $fecha_ini
 * @property string|null $fecha_fin
 * @property int|null $id_vehi
 * @property int|null $trip
 *
 * @package App\Models
 */
class Bu extends Model
{
	protected $table = 'bus';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'capacidad' => 'int',
		'id_vehi' => 'int',
		'trip' => 'int'
	];

	protected $fillable = [
		'id',
		'plate',
		'tipobus',
		'capacidad',
		'fecha_ini',
		'fecha_fin',
		'id_vehi',
		'trip'
	];
}
