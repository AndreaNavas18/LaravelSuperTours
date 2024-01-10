<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parque
 * 
 * @property int $id
 * @property string|null $nombre
 * @property int|null $id_grupo
 * @property string|null $image1
 * @property string|null $description
 * @property int $stock
 * @property int $id_2
 *
 * @package App\Models
 */
class Parque extends Model
{
	protected $table = 'parques';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_grupo' => 'int',
		'stock' => 'int',
		'id_2' => 'int'
	];

	protected $fillable = [
		'id',
		'nombre',
		'id_grupo',
		'image1',
		'description',
		'stock',
		'id_2'
	];
}
