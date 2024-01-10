<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusSchedulePluginPaypal
 * 
 * @property int $id
 * @property int|null $foreign_id
 * @property string|null $subscr_id
 * @property string|null $txn_id
 * @property string|null $txn_type
 * @property float|null $mc_gross
 * @property string|null $mc_currency
 * @property string|null $payer_email
 * @property Carbon|null $dt
 *
 * @package App\Models
 */
class BusSchedulePluginPaypal extends Model
{
	protected $table = 'bus_schedule_plugin_paypal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'foreign_id' => 'int',
		'mc_gross' => 'float',
		'dt' => 'datetime'
	];

	protected $fillable = [
		'id',
		'foreign_id',
		'subscr_id',
		'txn_id',
		'txn_type',
		'mc_gross',
		'mc_currency',
		'payer_email',
		'dt'
	];
}
