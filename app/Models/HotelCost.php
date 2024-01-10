<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelCost
 * 
 * @property int $id
 * @property int|null $id_hotel
 * @property string|null $fecha_ini
 * @property string|null $fecha_fin
 * @property float|null $sgl
 * @property float|null $dbl
 * @property float|null $tpl
 * @property float|null $qua
 * @property float|null $brackfast
 * @property float|null $super_breakfast
 *
 * @package App\Models
 */
class HotelCost extends Model
{
	protected $table = 'hotel_cost';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_hotel' => 'int',
		'sgl' => 'float',
		'dbl' => 'float',
		'tpl' => 'float',
		'qua' => 'float',
		'brackfast' => 'float',
		'super_breakfast' => 'float'
	];

	protected $fillable = [
		'id',
		'id_hotel',
		'fecha_ini',
		'fecha_fin',
		'sgl',
		'dbl',
		'tpl',
		'qua',
		'brackfast',
		'super_breakfast'
	];
}
