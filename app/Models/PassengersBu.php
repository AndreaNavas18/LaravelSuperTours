<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PassengersBu
 * 
 * @property int $id
 * @property int $id_reservas
 * @property int $trip
 * @property int $id_bus
 * @property string $driver
 * @property string $driver2
 * @property string $driver3
 * @property string $driver4
 * @property string $driver5
 * @property Carbon $fec_ini
 *
 * @package App\Models
 */
class PassengersBu extends Model
{
	protected $table = 'passengers_bus';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_reservas' => 'int',
		'trip' => 'int',
		'id_bus' => 'int',
		'fec_ini' => 'datetime'
	];

	protected $fillable = [
		'id',
		'id_reservas',
		'trip',
		'id_bus',
		'driver',
		'driver2',
		'driver3',
		'driver4',
		'driver5',
		'fec_ini'
	];
}
