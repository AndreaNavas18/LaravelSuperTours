<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Extension
 * 
 * @property int $id
 * @property int|null $id_area
 * @property string|null $place
 * @property string|null $address
 * @property string|null $precio
 * @property float $precio_neto
 * @property float|null $precio_especial
 * @property int|null $valid
 *
 * @package App\Models
 */
class Extension extends Model
{
	protected $table = 'extension';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_area' => 'int',
		'precio_neto' => 'float',
		'precio_especial' => 'float',
		'valid' => 'int'
	];

	protected $fillable = [
		'id',
		'id_area',
		'place',
		'address',
		'precio',
		'precio_neto',
		'precio_especial',
		'valid'
	];
}
