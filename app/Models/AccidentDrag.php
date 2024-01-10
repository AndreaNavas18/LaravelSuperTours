<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccidentDrag
 * 
 * @property int $id
 * @property int $id_driver
 * @property string|null $fecha
 * @property string|null $reporte
 * @property string|null $anexo
 *
 * @package App\Models
 */
class AccidentDrag extends Model
{
	protected $table = 'accident_drag';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_driver' => 'int'
	];

	protected $fillable = [
		'id',
		'id_driver',
		'fecha',
		'reporte',
		'anexo'
	];
}
