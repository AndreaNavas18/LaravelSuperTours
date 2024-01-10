<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividad
 * 
 * @property int $id
 * @property int $table
 * @property int $id_table
 * @property string $type_change
 * @property string $sql
 * @property string $comentario
 * @property Carbon $fecha
 * @property int $user
 * @property string $type_user
 *
 * @package App\Models
 */
class Actividad extends Model
{
	protected $table = 'actividad';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'table' => 'int',
		'id_table' => 'int',
		'fecha' => 'datetime',
		'user' => 'int'
	];

	protected $fillable = [
		'id',
		'table',
		'id_table',
		'type_change',
		'sql',
		'comentario',
		'fecha',
		'user',
		'type_user'
	];
}
