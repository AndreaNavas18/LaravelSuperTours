<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Credito
 * 
 * @property int $id
 * @property string|null $fecha
 * @property float|null $cantidad
 * @property int|null $id_agency_account
 * @property float|null $disponible
 *
 * @package App\Models
 */
class Credito extends Model
{
	protected $table = 'credito';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'cantidad' => 'float',
		'id_agency_account' => 'int',
		'disponible' => 'float'
	];

	protected $fillable = [
		'id',
		'fecha',
		'cantidad',
		'id_agency_account',
		'disponible'
	];
}
