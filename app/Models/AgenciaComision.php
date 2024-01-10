<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AgenciaComision
 * 
 * @property int $id
 * @property string|null $service
 * @property string|null $service_code
 * @property float|null $comision
 *
 * @package App\Models
 */
class AgenciaComision extends Model
{
	protected $table = 'agencia_comision';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'comision' => 'float'
	];

	protected $fillable = [
		'id',
		'service',
		'service_code',
		'comision'
	];
}
