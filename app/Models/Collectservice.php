<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Collectservice
 * 
 * @property int $id
 * @property int $id_servicio
 * @property string $tipo_servicio
 * @property float $monto_pagado
 *
 * @package App\Models
 */
class Collectservice extends Model
{
	protected $table = 'collectservice';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_servicio' => 'int',
		'monto_pagado' => 'float'
	];

	protected $fillable = [
		'id',
		'id_servicio',
		'tipo_servicio',
		'monto_pagado'
	];
}
