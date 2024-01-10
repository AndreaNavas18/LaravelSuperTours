<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Traffic
 * 
 * @property int $id
 * @property int|null $id_tour
 * @property string $type_tour
 * @property Carbon $time_am
 * @property string|null $from
 * @property string|null $to
 * @property int|null $id_attraction_trafic
 * @property Carbon $date
 * @property int|null $id_cliente
 * @property Carbon|null $time_pm
 * @property int|null $id_bus_am
 * @property int|null $id_bus_pm
 * @property string $type_traffic
 * @property int|null $driver_am
 * @property int|null $driver_pm
 * @property int|null $type_ticket
 * @property string|null $hotel_name
 * @property string|null $parking
 * @property string $estado
 *
 * @package App\Models
 */
class Traffic extends Model
{
	protected $table = 'traffic';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_tour' => 'int',
		'time_am' => 'datetime',
		'id_attraction_trafic' => 'int',
		'date' => 'datetime',
		'id_cliente' => 'int',
		'time_pm' => 'datetime',
		'id_bus_am' => 'int',
		'id_bus_pm' => 'int',
		'driver_am' => 'int',
		'driver_pm' => 'int',
		'type_ticket' => 'int'
	];

	protected $fillable = [
		'id',
		'id_tour',
		'type_tour',
		'time_am',
		'from',
		'to',
		'id_attraction_trafic',
		'date',
		'id_cliente',
		'time_pm',
		'id_bus_am',
		'id_bus_pm',
		'type_traffic',
		'driver_am',
		'driver_pm',
		'type_ticket',
		'hotel_name',
		'parking',
		'estado'
	];
}
