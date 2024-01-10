<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParquesAdd
 * 
 * @property int $id_parq
 * @property int $idfk_parq
 * @property int $oneday_parq
 * @property int $multid_parq
 * @property string|null $linkticket_parq
 * @property string|null $estado_parq
 * @property Carbon|null $fechacr_parq
 *
 * @package App\Models
 */
class ParquesAdd extends Model
{
	protected $table = 'parques_add';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_parq' => 'int',
		'idfk_parq' => 'int',
		'oneday_parq' => 'int',
		'multid_parq' => 'int',
		'fechacr_parq' => 'datetime'
	];

	protected $fillable = [
		'id_parq',
		'idfk_parq',
		'oneday_parq',
		'multid_parq',
		'linkticket_parq',
		'estado_parq',
		'fechacr_parq'
	];
}
