<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservasRastro
 * 
 * @property int $id
 * @property int $id_reserva
 * @property string $tipo_cambio
 * @property string $detalles
 * @property Carbon $fecha
 * @property int $usuario
 * @property string $tipo_usuario
 *
 * @package App\Models
 */
class ReservasRastro extends Model
{
	protected $table = 'reservas_rastro';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_reserva' => 'int',
		'fecha' => 'datetime',
		'usuario' => 'int'
	];

	protected $fillable = [
		'id',
		'id_reserva',
		'tipo_cambio',
		'detalles',
		'fecha',
		'usuario',
		'tipo_usuario'
	];
}
