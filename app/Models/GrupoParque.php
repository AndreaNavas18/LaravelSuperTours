<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GrupoParque
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $code_refe
 *
 * @package App\Models
 */
class GrupoParque extends Model
{
	protected $table = 'grupo_parques';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'nombre',
		'code_refe'
	];
}
