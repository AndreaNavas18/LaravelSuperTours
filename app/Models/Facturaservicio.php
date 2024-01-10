<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facturaservicio
 * 
 * @property int $id
 * @property int $id_factura
 * @property int $id_servicio
 * @property string $tipo_servicio
 *
 * @package App\Models
 */
class Facturaservicio extends Model
{
	protected $table = 'facturaservicio';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_factura' => 'int',
		'id_servicio' => 'int'
	];

	protected $fillable = [
		'id',
		'id_factura',
		'id_servicio',
		'tipo_servicio'
	];
}
