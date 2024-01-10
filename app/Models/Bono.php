<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bono
 * 
 * @property int $id
 * @property string $codigo
 * @property string $nombre
 * @property int $tipo_cliente
 * @property int $rule_id
 * @property int|null $asignado
 * @property string $redimido
 * @property float $valor
 * @property int $cantidad
 * @property Carbon $fecha_creacion
 * @property Carbon $fecha_vencimiento
 *
 * @package App\Models
 */
class Bono extends Model
{
	protected $table = 'bonos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'tipo_cliente' => 'int',
		'rule_id' => 'int',
		'asignado' => 'int',
		'valor' => 'float',
		'cantidad' => 'int',
		'fecha_creacion' => 'datetime',
		'fecha_vencimiento' => 'datetime'
	];

	protected $fillable = [
		'id',
		'codigo',
		'nombre',
		'tipo_cliente',
		'rule_id',
		'asignado',
		'redimido',
		'valor',
		'cantidad',
		'fecha_creacion',
		'fecha_vencimiento'
	];
}
