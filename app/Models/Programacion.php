<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programacion
 * 
 * @property int $id
 * @property string $trip_no
 * @property varbinary $fecha
 * @property string $anno
 * @property string $estado
 *
 * @package App\Models
 */
class Programacion extends Model
{
	protected $table = 'programacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'fecha' => 'varbinary'
	];

	protected $fillable = [
		'id',
		'trip_no',
		'fecha',
		'anno',
		'estado'
	];
}
