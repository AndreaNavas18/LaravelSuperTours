<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParquesTarifasgrupo
 * 
 * @property int $id
 * @property int|null $id_grupo
 * @property float|null $adult
 * @property float|null $child
 * @property int $type_rate
 * @property int $id_agency
 * @property string|null $company_name
 * @property Carbon $annio
 * @property string $start_date
 * @property string $end_date
 *
 * @package App\Models
 */
class ParquesTarifasgrupo extends Model
{
	protected $table = 'parques_tarifasgrupo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_grupo' => 'int',
		'adult' => 'float',
		'child' => 'float',
		'type_rate' => 'int',
		'id_agency' => 'int',
		'annio' => 'datetime'
	];

	protected $fillable = [
		'id',
		'id_grupo',
		'adult',
		'child',
		'type_rate',
		'id_agency',
		'company_name',
		'annio',
		'start_date',
		'end_date'
	];
}
