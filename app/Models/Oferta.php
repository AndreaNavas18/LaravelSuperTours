<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Oferta
 * 
 * @property int $id
 * @property int $trip_from
 * @property int $trip_to
 * @property string|null $fecha_ini
 * @property string|null $fecha_fin
 * @property string|null $trip_no
 * @property float|null $price
 * @property float|null $price2
 * @property float|null $price3
 * @property float|null $price4
 * @property string|null $regular
 * @property string|null $frecuente
 *
 * @package App\Models
 */
class Oferta extends Model
{
	protected $table = 'ofertas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'trip_from' => 'int',
		'trip_to' => 'int',
		'price' => 'float',
		'price2' => 'float',
		'price3' => 'float',
		'price4' => 'float'
	];

	protected $fillable = [
		'id',
		'trip_from',
		'trip_to',
		'fecha_ini',
		'fecha_fin',
		'trip_no',
		'price',
		'price2',
		'price3',
		'price4',
		'regular',
		'frecuente'
	];
}
