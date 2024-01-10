<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hotelcategorium
 * 
 * @property int $id
 * @property string|null $nombre
 * @property int|null $star
 *
 * @package App\Models
 */
class Hotelcategorium extends Model
{
	protected $table = 'hotelcategoria';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'star' => 'int'
	];

	protected $fillable = [
		'id',
		'nombre',
		'star'
	];
}
