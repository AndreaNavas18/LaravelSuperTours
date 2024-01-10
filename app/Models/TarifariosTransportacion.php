<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TarifariosTransportacion
 * 
 * @property int $id
 * @property string $special_price_name
 * @property string|null $fecha_ini
 * @property string|null $fecha_fin
 *
 * @package App\Models
 */
class TarifariosTransportacion extends Model
{
	protected $table = 'tarifarios_transportacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'special_price_name',
		'fecha_ini',
		'fecha_fin'
	];
}
