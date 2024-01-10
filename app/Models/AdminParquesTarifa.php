<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminParquesTarifa
 * 
 * @property int $id
 * @property float|null $adults
 * @property float|null $child
 * @property int|null $id_grupo
 * @property int|null $id_parque
 * @property int|null $cantidad
 * @property int $type_rate
 * @property int $id_agency
 * @property string $company_name
 * @property Carbon $annio
 * @property string $fecha_ini
 * @property string $fecha_fin
 * @property float $adults1
 * @property float $child1
 * @property float $t_adults
 * @property float $t_childs
 * @property string $year
 * @property string|null $inicio
 * @property string|null $fin
 *
 * @package App\Models
 */
class AdminParquesTarifa extends Model
{
	protected $table = 'admin_parques_tarifa';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'adults' => 'float',
		'child' => 'float',
		'id_grupo' => 'int',
		'id_parque' => 'int',
		'cantidad' => 'int',
		'type_rate' => 'int',
		'id_agency' => 'int',
		'annio' => 'datetime',
		'adults1' => 'float',
		'child1' => 'float',
		't_adults' => 'float',
		't_childs' => 'float'
	];

	protected $fillable = [
		'id',
		'adults',
		'child',
		'id_grupo',
		'id_parque',
		'cantidad',
		'type_rate',
		'id_agency',
		'company_name',
		'annio',
		'fecha_ini',
		'fecha_fin',
		'adults1',
		'child1',
		't_adults',
		't_childs',
		'year',
		'inicio',
		'fin'
	];
}
