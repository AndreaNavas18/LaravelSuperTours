<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ToursOneday
 * 
 * @property int $id
 * @property int $id_client
 * @property int $type_client
 * @property int $id_agency
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
 * @property int $id_transfer_in
 * @property int $id_transfer_out
 * @property string $comments
 * @property string $comments2
 * @property float|null $t_price_adult
 * @property float|null $t_price_child
 * @property float|null $t_parque_adult
 * @property float|null $t_parque_child
 * @property float|null $entradas_price_adult
 * @property float|null $entradas_price_child
 * @property float|null $price_exten1_adult
 * @property float|null $price_exten1_child
 * @property float|null $price_exten2_adult
 * @property float|null $price_exten2_child
 * @property bool|null $price_especial
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
 * @property string|null $tipo_pago
 * @property string $pago
 * @property int $op_pago
 * @property int $op_pago_conductor
 * @property string $canal
 * @property string $estado
 * @property bool $include_park
 * @property int $group_park
 * @property int $id_bus
 * @property string $ip_op
 * @property string $confir_dep
 * @property string $confir_ret
 *
 * @package App\Models
 */
class ToursOneday extends Model
{
	protected $table = 'tours_oneday';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_client' => 'int',
		'type_client' => 'int',
		'id_agency' => 'int',
		'creation_date' => 'datetime',
		'starting_date' => 'datetime',
		'ending_date' => 'datetime',
		'length_day' => 'int',
		'length_nights' => 'int',
		'adult' => 'int',
		'child' => 'int',
		'id_reserva' => 'int',
		'id_transfer_in' => 'int',
		'id_transfer_out' => 'int',
		't_price_adult' => 'float',
		't_price_child' => 'float',
		't_parque_adult' => 'float',
		't_parque_child' => 'float',
		'entradas_price_adult' => 'float',
		'entradas_price_child' => 'float',
		'price_exten1_adult' => 'float',
		'price_exten1_child' => 'float',
		'price_exten2_adult' => 'float',
		'price_exten2_child' => 'float',
		'price_especial' => 'bool',
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
		'op_pago' => 'int',
		'op_pago_conductor' => 'int',
		'include_park' => 'bool',
		'group_park' => 'int',
		'id_bus' => 'int'
	];

	protected $fillable = [
		'id',
		'id_client',
		'type_client',
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
		'comments',
		'comments2',
		't_price_adult',
		't_price_child',
		't_parque_adult',
		't_parque_child',
		'entradas_price_adult',
		'entradas_price_child',
		'price_exten1_adult',
		'price_exten1_child',
		'price_exten2_adult',
		'price_exten2_child',
		'price_especial',
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
		'tipo_pago',
		'pago',
		'op_pago',
		'op_pago_conductor',
		'canal',
		'estado',
		'include_park',
		'group_park',
		'id_bus',
		'ip_op',
		'confir_dep',
		'confir_ret'
	];
}
