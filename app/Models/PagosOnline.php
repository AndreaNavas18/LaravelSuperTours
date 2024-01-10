<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PagosOnline
 * 
 * @property int $id
 * @property string $txn_id
 * @property Carbon $created
 * @property string $tipo_tarjeta
 * @property string $brand
 * @property string $last4
 * @property string $paid_amount
 * @property string $paid_amount_currency
 * @property string $payment_status
 * @property string $status_msg
 * @property string $cod_conf
 * @property string $cardholder_name
 * @property string $passenger_name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $country
 * @property string $city
 * @property string $zip_code
 * @property string $state
 *
 * @package App\Models
 */
class PagosOnline extends Model
{
	protected $table = 'pagos_online';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'created' => 'datetime'
	];

	protected $fillable = [
		'id',
		'txn_id',
		'created',
		'tipo_tarjeta',
		'brand',
		'last4',
		'paid_amount',
		'paid_amount_currency',
		'payment_status',
		'status_msg',
		'cod_conf',
		'cardholder_name',
		'passenger_name',
		'email',
		'phone',
		'address',
		'country',
		'city',
		'zip_code',
		'state'
	];
}
