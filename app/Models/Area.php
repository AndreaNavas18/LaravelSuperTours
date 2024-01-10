<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 * 
 * @property int $id
 * @property string $nombre
 * @property int|null $orden
 *
 * @package App\Models
 */
class Area extends Model
{
	protected $table = 'areas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'orden' => 'int'
	];

	protected $fillable = [
		'id',
		'nombre',
		'orden'
	];
}
