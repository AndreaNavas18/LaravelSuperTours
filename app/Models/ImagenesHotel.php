<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImagenesHotel
 * 
 * @property int $id
 * @property int $id_hotel
 * @property string $ruta_resize
 * @property string $ruta_peque
 * @property string|null $nombre_original
 * @property string|null $descripcion
 * @property int $orden
 *
 * @package App\Models
 */
class ImagenesHotel extends Model
{
	protected $table = 'imagenes_hotel';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_hotel' => 'int',
		'orden' => 'int'
	];

	protected $fillable = [
		'id',
		'id_hotel',
		'ruta_resize',
		'ruta_peque',
		'nombre_original',
		'descripcion',
		'orden'
	];
}
