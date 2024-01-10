<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Codigo
 * 
 * @property int $id
 * @property string $tipo
 * @property string $codigo
 * @property string $descripcion
 *
 * @package App\Models
 */
class Codigo extends Model
{
	protected $table = 'codigos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'tipo',
		'codigo',
		'descripcion'
	];
}
