<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttractionTrafic
 * 
 * @property int $id
 * @property int $id_tours
 * @property string $type_tour
 * @property int $id_park
 * @property string $group
 * @property Carbon $creation_date
 * @property Carbon $starting_date
 * @property Carbon $ending_date
 * @property string $admission
 * @property string $trafic
 * @property int $id_cliente
 * @property int $type_client
 * @property int $id_agencia
 * @property int $adult
 * @property int $child
 * @property int $total_person
 * @property float $admission_child
 * @property float $admission_adtul
 * @property float $totalAdmission
 * @property int $precio_varios
 * @property int $cantidad
 * @property float $v_p_child
 * @property float $v_p_adult
 * @property float $transpor_adult
 * @property float $transpor_child
 * @property float $totalTraspor
 * @property float $total_paid
 * @property string|null $n_parque
 * @property string|null $n_grupo
 *
 * @package App\Models
 */
class AttractionTrafic extends Model
{
	protected $table = 'attraction_trafic';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_tours' => 'int',
		'id_park' => 'int',
		'creation_date' => 'datetime',
		'starting_date' => 'datetime',
		'ending_date' => 'datetime',
		'id_cliente' => 'int',
		'type_client' => 'int',
		'id_agencia' => 'int',
		'adult' => 'int',
		'child' => 'int',
		'total_person' => 'int',
		'admission_child' => 'float',
		'admission_adtul' => 'float',
		'totalAdmission' => 'float',
		'precio_varios' => 'int',
		'cantidad' => 'int',
		'v_p_child' => 'float',
		'v_p_adult' => 'float',
		'transpor_adult' => 'float',
		'transpor_child' => 'float',
		'totalTraspor' => 'float',
		'total_paid' => 'float'
	];

	protected $fillable = [
		'id',
		'id_tours',
		'type_tour',
		'id_park',
		'group',
		'creation_date',
		'starting_date',
		'ending_date',
		'admission',
		'trafic',
		'id_cliente',
		'type_client',
		'id_agencia',
		'adult',
		'child',
		'total_person',
		'admission_child',
		'admission_adtul',
		'totalAdmission',
		'precio_varios',
		'cantidad',
		'v_p_child',
		'v_p_adult',
		'transpor_adult',
		'transpor_child',
		'totalTraspor',
		'total_paid',
		'n_parque',
		'n_grupo'
	];
}
