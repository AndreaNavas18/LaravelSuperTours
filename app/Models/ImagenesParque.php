<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImagenesParque
 * 
 * @property int $id
 * @property int $id_parques
 * @property string $ruta_resize
 * @property string $ruta_peque
 * @property string $nombre_original
 * @property string|null $descripcion
 * @property int $orden
 *
 * @package App\Models
 */
class ImagenesParque extends Model
{
	protected $table = 'imagenes_parques';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_parques' => 'int',
		'orden' => 'int'
	];

	protected $fillable = [
		'id',
		'id_parques',
		'ruta_resize',
		'ruta_peque',
		'nombre_original',
		'descripcion',
		'orden'
	];
}
