<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dato
 * 
 * @property int $id
 * @property string|null $clase
 * @property int|null $id_opcion
 *
 * @package App\Models
 */
class Dato extends Model
{
	protected $table = 'datos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_opcion' => 'int'
	];

	protected $fillable = [
		'id',
		'clase',
		'id_opcion'
	];
}
