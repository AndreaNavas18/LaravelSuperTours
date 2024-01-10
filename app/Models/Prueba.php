<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prueba
 * 
 * @property string|null $nombre
 * @property string|null $apellido
 * @property string|null $email
 *
 * @package App\Models
 */
class Prueba extends Model
{
	protected $table = 'prueba';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'apellido',
		'email'
	];
}
