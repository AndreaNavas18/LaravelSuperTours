<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservasAgency
 * 
 * @property int $id
 * @property int $id_reservas
 * @property int|null $id_agencia
 * @property int|null $id_cliente
 * @property int $type_client
 * @property int $id_useragency
 * @property string|null $paid_type
 * @property string|null $metodo_paid
 * @property float|null $paid_net
 * @property float|null $paid_full
 * @property float $otheramount
 * @property float|null $agency_fee
 * @property float|null $comision
 * @property int|null $paper_voucher
 *
 * @package App\Models
 */
class ReservasAgency extends Model
{
	protected $table = 'reservas_agency';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_reservas' => 'int',
		'id_agencia' => 'int',
		'id_cliente' => 'int',
		'type_client' => 'int',
		'id_useragency' => 'int',
		'paid_net' => 'float',
		'paid_full' => 'float',
		'otheramount' => 'float',
		'agency_fee' => 'float',
		'comision' => 'float',
		'paper_voucher' => 'int'
	];

	protected $fillable = [
		'id',
		'id_reservas',
		'id_agencia',
		'id_cliente',
		'type_client',
		'id_useragency',
		'paid_type',
		'metodo_paid',
		'paid_net',
		'paid_full',
		'otheramount',
		'agency_fee',
		'comision',
		'paper_voucher'
	];
}
