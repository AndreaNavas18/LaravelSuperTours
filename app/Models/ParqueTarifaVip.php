<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ParqueTarifaVip
 * 
 * @property int $id
 * @property int|null $cantidad
 * @property float|null $valor
 *
 * @package App\Models
 */
class ParqueTarifaVip extends Model
{
	protected $table = 'parque_tarifa_vip';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'cantidad' => 'int',
		'valor' => 'float'
	];

	protected $fillable = [
		'id',
		'cantidad',
		'valor'
	];
}
