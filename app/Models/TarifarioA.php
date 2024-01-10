<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TarifarioA
 * 
 * @property int $id
 * @property string $fecha_ini
 * @property string $fecha_fin
 * @property int $id_hotel
 * @property int $categoria
 * @property int $days
 * @property int $nights
 * @property float $sgl
 * @property float $dbl
 * @property float $tpl
 * @property float $qua
 * @property int $child
 * @property float $s_c_hab
 * @property float $trip_100
 * @property float $trip_200
 * @property float $trip_300
 * @property float $trip_101
 * @property float $trip_201
 * @property float $trip_301
 * @property float $t_in
 * @property float $t_out
 * @property float $car_in
 * @property float $car_out
 * @property float $na_sa
 *
 * @package App\Models
 */
class TarifarioA extends Model
{
	protected $table = 'tarifario_a';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_hotel' => 'int',
		'categoria' => 'int',
		'days' => 'int',
		'nights' => 'int',
		'sgl' => 'float',
		'dbl' => 'float',
		'tpl' => 'float',
		'qua' => 'float',
		'child' => 'int',
		's_c_hab' => 'float',
		'trip_100' => 'float',
		'trip_200' => 'float',
		'trip_300' => 'float',
		'trip_101' => 'float',
		'trip_201' => 'float',
		'trip_301' => 'float',
		't_in' => 'float',
		't_out' => 'float',
		'car_in' => 'float',
		'car_out' => 'float',
		'na_sa' => 'float'
	];

	protected $fillable = [
		'id',
		'fecha_ini',
		'fecha_fin',
		'id_hotel',
		'categoria',
		'days',
		'nights',
		'sgl',
		'dbl',
		'tpl',
		'qua',
		'child',
		's_c_hab',
		'trip_100',
		'trip_200',
		'trip_300',
		'trip_101',
		'trip_201',
		'trip_301',
		't_in',
		't_out',
		'car_in',
		'car_out',
		'na_sa'
	];
}
