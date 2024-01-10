<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ToursNotacredi
 * 
 * @property int $id
 * @property int $id_tours
 * @property int $valor
 * @property int $usuario
 * @property Carbon $fecha
 * @property string $tipo
 *
 * @package App\Models
 */
class ToursNotacredi extends Model
{
	protected $table = 'tours_notacredi';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_tours' => 'int',
		'valor' => 'int',
		'usuario' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id',
		'id_tours',
		'valor',
		'usuario',
		'fecha',
		'tipo'
	];
}
