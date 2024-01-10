<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GrupoParquesOneday
 * 
 * @property int $id
 * @property int $grupo_parque
 * @property int $g1
 * @property int $g2
 * @property int $g3
 * @property int $g4
 * @property int $g5
 * @property int $g6
 * @property int $g7
 * @property int $g8
 * @property int $g9
 * @property int $g10
 *
 * @package App\Models
 */
class GrupoParquesOneday extends Model
{
	protected $table = 'grupo_parques_oneday';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'grupo_parque' => 'int',
		'g1' => 'int',
		'g2' => 'int',
		'g3' => 'int',
		'g4' => 'int',
		'g5' => 'int',
		'g6' => 'int',
		'g7' => 'int',
		'g8' => 'int',
		'g9' => 'int',
		'g10' => 'int'
	];

	protected $fillable = [
		'id',
		'grupo_parque',
		'g1',
		'g2',
		'g3',
		'g4',
		'g5',
		'g6',
		'g7',
		'g8',
		'g9',
		'g10'
	];
}
