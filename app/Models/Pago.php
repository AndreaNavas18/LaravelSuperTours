<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 * 
 * @property int $id
 * @property int $factura
 * @property int $monto
 * @property string $tipo
 * @property string $medio
 * @property string $transnu
 * @property string $adjunto
 * @property int $descuento
 * @property float $por_descuento
 * @property Carbon $fecha
 * @property int $metodo
 *
 * @package App\Models
 */
class Pago extends Model
{
	protected $table = 'pagos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'factura' => 'int',
		'monto' => 'int',
		'descuento' => 'int',
		'por_descuento' => 'float',
		'fecha' => 'datetime',
		'metodo' => 'int'
	];

	protected $fillable = [
		'id',
		'factura',
		'monto',
		'tipo',
		'medio',
		'transnu',
		'adjunto',
		'descuento',
		'por_descuento',
		'fecha',
		'metodo'
	];
}
