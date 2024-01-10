<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ToursAgency
 * 
 * @property int $id
 * @property int $id_reserva
 * @property int $id_tours
 * @property string $type_tour
 * @property int $id_agencia
 * @property float $comision
 * @property int $type_rate
 * @property float $agency_fee
 * @property string $tipo_pago
 * @property string $pago
 * @property float $totalouta
 * @property float $otheramount
 * @property float $total
 *
 * @package App\Models
 */
class ToursAgency extends Model
{
	protected $table = 'tours_agency';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_reserva' => 'int',
		'id_tours' => 'int',
		'id_agencia' => 'int',
		'comision' => 'float',
		'type_rate' => 'int',
		'agency_fee' => 'float',
		'totalouta' => 'float',
		'otheramount' => 'float',
		'total' => 'float'
	];

	protected $fillable = [
		'id',
		'id_reserva',
		'id_tours',
		'type_tour',
		'id_agencia',
		'comision',
		'type_rate',
		'agency_fee',
		'tipo_pago',
		'pago',
		'totalouta',
		'otheramount',
		'total'
	];
}
