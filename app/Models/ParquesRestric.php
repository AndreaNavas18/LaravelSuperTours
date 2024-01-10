<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ParquesRestric
 * 
 * @property int|null $id_parque
 * @property int|null $id_grupo
 * @property string $fecha_ini
 * @property string $fecha_fin
 * @property int $park_select2
 * @property int $park_select3
 * @property int $park_select4
 * @property int $park_select5
 * @property int $park_select6
 * @property int $tari_2
 * @property int $tari_3
 * @property int $tari_4
 * @property int $tari_5
 * @property int $tari_6
 * @property string|null $inicio
 * @property string|null $fin
 * @property int|null $cantidad
 *
 * @package App\Models
 */
class ParquesRestric extends Model
{
	protected $table = 'parques_restric';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_parque' => 'int',
		'id_grupo' => 'int',
		'park_select2' => 'int',
		'park_select3' => 'int',
		'park_select4' => 'int',
		'park_select5' => 'int',
		'park_select6' => 'int',
		'tari_2' => 'int',
		'tari_3' => 'int',
		'tari_4' => 'int',
		'tari_5' => 'int',
		'tari_6' => 'int',
		'cantidad' => 'int'
	];

	protected $fillable = [
		'id_parque',
		'id_grupo',
		'fecha_ini',
		'fecha_fin',
		'park_select2',
		'park_select3',
		'park_select4',
		'park_select5',
		'park_select6',
		'tari_2',
		'tari_3',
		'tari_4',
		'tari_5',
		'tari_6',
		'inicio',
		'fin',
		'cantidad'
	];
}
