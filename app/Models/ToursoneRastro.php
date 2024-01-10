<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ToursoneRastro
 * 
 * @property int $id
 * @property int $id_tours
 * @property string $tipo_cambio
 * @property string $detalles
 * @property Carbon $fecha
 * @property int $usuario
 * @property string $tipo_usuario
 *
 * @package App\Models
 */
class ToursoneRastro extends Model
{
	protected $table = 'toursone_rastro';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_tours' => 'int',
		'fecha' => 'datetime',
		'usuario' => 'int'
	];

	protected $fillable = [
		'id',
		'id_tours',
		'tipo_cambio',
		'detalles',
		'fecha',
		'usuario',
		'tipo_usuario'
	];
}
