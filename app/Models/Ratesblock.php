<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ratesblock
 * 
 * @property int $id
 * @property int|null $id_hotel
 * @property string|null $fecha_ini
 * @property string|null $fecha_fin
 *
 * @package App\Models
 */
class Ratesblock extends Model
{
	protected $table = 'ratesblock';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_hotel' => 'int'
	];

	protected $fillable = [
		'id',
		'id_hotel',
		'fecha_ini',
		'fecha_fin'
	];
}
