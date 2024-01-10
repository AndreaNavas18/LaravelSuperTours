<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservasPago
 * 
 * @property int $id
 * @property int $id_reserva
 * @property string $pago
 * @property string $tipo_pago
 * @property float $pagado
 * @property int $usuario
 * @property Carbon $fecha
 *
 * @package App\Models
 */
class ReservasPago extends Model
{
	protected $table = 'reservas_pago';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_reserva' => 'int',
		'pagado' => 'float',
		'usuario' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id',
		'id_reserva',
		'pago',
		'tipo_pago',
		'pagado',
		'usuario',
		'fecha'
	];
}
