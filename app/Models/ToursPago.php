<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ToursPago
 * 
 * @property int $id
 * @property int $id_tours
 * @property string $pago
 * @property string $tipo_pago
 * @property float $pagado
 * @property int $usuario
 * @property Carbon $fecha
 * @property string $tipo
 *
 * @package App\Models
 */
class ToursPago extends Model
{
	protected $table = 'tours_pago';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_tours' => 'int',
		'pagado' => 'float',
		'usuario' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id',
		'id_tours',
		'pago',
		'tipo_pago',
		'pagado',
		'usuario',
		'fecha',
		'tipo'
	];
}
