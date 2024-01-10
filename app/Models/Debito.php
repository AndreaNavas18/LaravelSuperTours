<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Debito
 * 
 * @property int $id
 * @property string|null $fecha
 * @property float|null $cantidad
 * @property string|null $referepago
 * @property string|null $anexo
 * @property int|null $id_agency_account
 *
 * @package App\Models
 */
class Debito extends Model
{
	protected $table = 'debito';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'cantidad' => 'float',
		'id_agency_account' => 'int'
	];

	protected $fillable = [
		'id',
		'fecha',
		'cantidad',
		'referepago',
		'anexo',
		'id_agency_account'
	];
}
