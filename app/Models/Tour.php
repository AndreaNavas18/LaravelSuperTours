<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tour
 * 
 * @property int $id
 * @property int $id_client
 * @property int $type_client
 * @property int $platinum
 * @property string $id_agency
 * @property string $code_conf
 * @property string $agency_employee
 * @property Carbon $creation_date
 * @property Carbon $starting_date
 * @property Carbon $ending_date
 * @property int $length_day
 * @property int|null $length_nights
 * @property int $adult
 * @property int $child
 * @property int $id_reserva
 * @property string $id_transfer_in
 * @property string $id_transfer_out
 * @property string $id_hotel_reserve
 * @property string $comments
 * @property string $comments2
 * @property string $tipo_pago
 * @property string $pago
 * @property string $op_pago
 * @property string $op_pago_conductor
 * @property float $total
 * @property float $totalouta
 * @property float $otheramount
 * @property float $otheramount_sin_tax
 * @property float $passenger_balance_due
 * @property float $paid_driver
 * @property float $agency_balance_due
 * @property float $total_paid
 * @property float $pred_paid_amount
 * @property float $total_charge
 * @property float $extra_charge
 * @property int $descuento_procentaje
 * @property float $descuento_valor
 * @property string $canal
 * @property string $estado
 * @property string|null $mensaje_tiquetes
 * @property int $tarifario
 * @property int $id_bus
 * @property string $ip_op
 * @property string $confir_dep
 * @property string $confir_ret
 *
 * @package App\Models
 */
class Tour extends Model
{
	protected $table = 'tours';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_client' => 'int',
		'type_client' => 'int',
		'platinum' => 'int',
		'creation_date' => 'datetime',
		'starting_date' => 'datetime',
		'ending_date' => 'datetime',
		'length_day' => 'int',
		'length_nights' => 'int',
		'adult' => 'int',
		'child' => 'int',
		'id_reserva' => 'int',
		'total' => 'float',
		'totalouta' => 'float',
		'otheramount' => 'float',
		'otheramount_sin_tax' => 'float',
		'passenger_balance_due' => 'float',
		'paid_driver' => 'float',
		'agency_balance_due' => 'float',
		'total_paid' => 'float',
		'pred_paid_amount' => 'float',
		'total_charge' => 'float',
		'extra_charge' => 'float',
		'descuento_procentaje' => 'int',
		'descuento_valor' => 'float',
		'tarifario' => 'int',
		'id_bus' => 'int'
	];

	protected $fillable = [
		'id',
		'id_client',
		'type_client',
		'platinum',
		'id_agency',
		'code_conf',
		'agency_employee',
		'creation_date',
		'starting_date',
		'ending_date',
		'length_day',
		'length_nights',
		'adult',
		'child',
		'id_reserva',
		'id_transfer_in',
		'id_transfer_out',
		'id_hotel_reserve',
		'comments',
		'comments2',
		'tipo_pago',
		'pago',
		'op_pago',
		'op_pago_conductor',
		'total',
		'totalouta',
		'otheramount',
		'otheramount_sin_tax',
		'passenger_balance_due',
		'paid_driver',
		'agency_balance_due',
		'total_paid',
		'pred_paid_amount',
		'total_charge',
		'extra_charge',
		'descuento_procentaje',
		'descuento_valor',
		'canal',
		'estado',
		'mensaje_tiquetes',
		'tarifario',
		'id_bus',
		'ip_op',
		'confir_dep',
		'confir_ret'
	];
}
