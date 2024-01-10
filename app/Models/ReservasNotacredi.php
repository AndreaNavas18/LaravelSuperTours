<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservasNotacredi
 * 
 * @property int $id
 * @property int $id_reserva
 * @property int $valor
 * @property int $usuario
 * @property Carbon $fecha
 *
 * @package App\Models
 */
class ReservasNotacredi extends Model
{
	protected $table = 'reservas_notacredi';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_reserva' => 'int',
		'valor' => 'int',
		'usuario' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id',
		'id_reserva',
		'valor',
		'usuario',
		'fecha'
	];
}
