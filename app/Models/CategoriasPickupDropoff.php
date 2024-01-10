<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriasPickupDropoff
 * 
 * @property int $id
 * @property int $id_pick
 * @property string|null $nombre_cat
 *
 * @package App\Models
 */
class CategoriasPickupDropoff extends Model
{
	protected $table = 'categorias_pickup_dropoff';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pick' => 'int'
	];

	protected $fillable = [
		'id',
		'id_pick',
		'nombre_cat'
	];
}
