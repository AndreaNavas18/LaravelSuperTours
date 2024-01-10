<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservasTripPuesto
 * 
 * @property int $id
 * @property string $trip_to
 * @property int $tipo
 * @property Carbon $fecha_trip
 * @property int $cantidad
 * @property Carbon $fecha_usado
 * @property int $usuario
 * @property string $estado
 * @property Carbon $fecha_actividad
 * @property int $tarifa
 *
 * @package App\Models
 */
class ReservasTripPuesto extends Model
{
	protected $table = 'reservas_trip_puestos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'tipo' => 'int',
		'fecha_trip' => 'datetime',
		'cantidad' => 'int',
		'fecha_usado' => 'datetime',
		'usuario' => 'int',
		'fecha_actividad' => 'datetime',
		'tarifa' => 'int'
	];

	protected $fillable = [
		'id',
		'trip_to',
		'tipo',
		'fecha_trip',
		'cantidad',
		'fecha_usado',
		'usuario',
		'estado',
		'fecha_actividad',
		'tarifa'
	];
}
