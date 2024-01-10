<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservas2
 * 
 * @property int $id
 * @property int $id_tours
 * @property string $type_tour
 * @property string|null $fecha_ini
 * @property int|null $trip_no
 * @property int|null $trip_no2
 * @property string|null $tipo_ticket
 * @property string|null $fromt
 * @property string|null $tot
 * @property int $fromt2
 * @property int $tot2
 * @property string|null $firsname
 * @property string|null $lasname
 * @property string|null $email
 * @property Carbon $deptime1
 * @property Carbon $deptime2
 * @property Carbon $arrtime1
 * @property Carbon $arrtime2
 * @property float $precio_trip1_a
 * @property float $precio_trip1_c
 * @property float $precio_trip2_a
 * @property float $precio_trip2_c
 * @property float $precio_exten1_a
 * @property float $precio_exten1_c
 * @property float $precio_exten2_a
 * @property float $precio_exten2_c
 * @property float $precio_exten3_a
 * @property float $precio_exten3_c
 * @property float $precio_exten4_a
 * @property float $precio_exten4_c
 * @property float $precioA
 * @property float $precioN
 * @property int $extension1
 * @property float $precio_e1
 * @property string $pickup_exten1
 * @property int $extension2
 * @property float $precio_e2
 * @property string $pickup_exten2
 * @property int $extension3
 * @property float $precio_e3
 * @property string $pickup_exten3
 * @property int $extension4
 * @property float $precio_e4
 * @property string $pickup_exten4
 * @property string|null $room1
 * @property string|null $room2
 * @property string|null $fecha_salida
 * @property string|null $fecha_retorno
 * @property int|null $pax
 * @property int|null $pax2
 * @property int|null $pax3
 * @property int|null $id_clientes
 * @property float $customer_disabilities
 * @property int|null $pickup1
 * @property int|null $dropoff1
 * @property int|null $pickup2
 * @property int|null $dropoff2
 * @property string|null $tipo_pago
 * @property string $pago
 * @property string $op_pago
 * @property float|null $totaltotal
 * @property float $otheramount
 * @property float $paid_driver
 * @property float $passenger_balance_due
 * @property float $pred_paid_amount
 * @property float $agency_balance_due
 * @property float $total_paid
 * @property float $total_charge
 * @property int $id1
 * @property int $id2
 * @property float $extra_charge
 * @property int $descuento_procentaje
 * @property float $descuento_valor
 * @property float|null $total2
 * @property string|null $codconf
 * @property string|null $hora
 * @property string|null $comments
 * @property string $comments2
 * @property int $resident
 * @property string|null $agen
 * @property int|null $tipo_client
 * @property int|null $reward_id
 * @property int|null $agency
 * @property int $luggage1
 * @property int $luggage2
 * @property string $canal
 * @property string $estado
 * @property string $ip_op
 * @property int $toutwcharge
 *
 * @package App\Models
 */
class Reservas2 extends Model
{
	protected $table = 'reservas2';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_tours' => 'int',
		'trip_no' => 'int',
		'trip_no2' => 'int',
		'fromt2' => 'int',
		'tot2' => 'int',
		'deptime1' => 'datetime',
		'deptime2' => 'datetime',
		'arrtime1' => 'datetime',
		'arrtime2' => 'datetime',
		'precio_trip1_a' => 'float',
		'precio_trip1_c' => 'float',
		'precio_trip2_a' => 'float',
		'precio_trip2_c' => 'float',
		'precio_exten1_a' => 'float',
		'precio_exten1_c' => 'float',
		'precio_exten2_a' => 'float',
		'precio_exten2_c' => 'float',
		'precio_exten3_a' => 'float',
		'precio_exten3_c' => 'float',
		'precio_exten4_a' => 'float',
		'precio_exten4_c' => 'float',
		'precioA' => 'float',
		'precioN' => 'float',
		'extension1' => 'int',
		'precio_e1' => 'float',
		'extension2' => 'int',
		'precio_e2' => 'float',
		'extension3' => 'int',
		'precio_e3' => 'float',
		'extension4' => 'int',
		'precio_e4' => 'float',
		'pax' => 'int',
		'pax2' => 'int',
		'pax3' => 'int',
		'id_clientes' => 'int',
		'customer_disabilities' => 'float',
		'pickup1' => 'int',
		'dropoff1' => 'int',
		'pickup2' => 'int',
		'dropoff2' => 'int',
		'totaltotal' => 'float',
		'otheramount' => 'float',
		'paid_driver' => 'float',
		'passenger_balance_due' => 'float',
		'pred_paid_amount' => 'float',
		'agency_balance_due' => 'float',
		'total_paid' => 'float',
		'total_charge' => 'float',
		'id1' => 'int',
		'id2' => 'int',
		'extra_charge' => 'float',
		'descuento_procentaje' => 'int',
		'descuento_valor' => 'float',
		'total2' => 'float',
		'resident' => 'int',
		'tipo_client' => 'int',
		'reward_id' => 'int',
		'agency' => 'int',
		'luggage1' => 'int',
		'luggage2' => 'int',
		'toutwcharge' => 'int'
	];

	protected $fillable = [
		'id',
		'id_tours',
		'type_tour',
		'fecha_ini',
		'trip_no',
		'trip_no2',
		'tipo_ticket',
		'fromt',
		'tot',
		'fromt2',
		'tot2',
		'firsname',
		'lasname',
		'email',
		'deptime1',
		'deptime2',
		'arrtime1',
		'arrtime2',
		'precio_trip1_a',
		'precio_trip1_c',
		'precio_trip2_a',
		'precio_trip2_c',
		'precio_exten1_a',
		'precio_exten1_c',
		'precio_exten2_a',
		'precio_exten2_c',
		'precio_exten3_a',
		'precio_exten3_c',
		'precio_exten4_a',
		'precio_exten4_c',
		'precioA',
		'precioN',
		'extension1',
		'precio_e1',
		'pickup_exten1',
		'extension2',
		'precio_e2',
		'pickup_exten2',
		'extension3',
		'precio_e3',
		'pickup_exten3',
		'extension4',
		'precio_e4',
		'pickup_exten4',
		'room1',
		'room2',
		'fecha_salida',
		'fecha_retorno',
		'pax',
		'pax2',
		'pax3',
		'id_clientes',
		'customer_disabilities',
		'pickup1',
		'dropoff1',
		'pickup2',
		'dropoff2',
		'tipo_pago',
		'pago',
		'op_pago',
		'totaltotal',
		'otheramount',
		'paid_driver',
		'passenger_balance_due',
		'pred_paid_amount',
		'agency_balance_due',
		'total_paid',
		'total_charge',
		'id1',
		'id2',
		'extra_charge',
		'descuento_procentaje',
		'descuento_valor',
		'total2',
		'codconf',
		'hora',
		'comments',
		'comments2',
		'resident',
		'agen',
		'tipo_client',
		'reward_id',
		'agency',
		'luggage1',
		'luggage2',
		'canal',
		'estado',
		'ip_op',
		'toutwcharge'
	];
}
