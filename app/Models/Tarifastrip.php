<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarifastrip
 * 
 * @property int $id
 * @property int|null $trip_no
 * @property float $adult
 * @property float $child
 * @property int $type_rate
 * @property int $id_agency
 * @property string|null $company_name
 * @property Carbon $annio
 * @property int $id_ratesvalid
 *
 * @package App\Models
 */
class Tarifastrip extends Model
{
	protected $table = 'tarifastrip';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'trip_no' => 'int',
		'adult' => 'float',
		'child' => 'float',
		'type_rate' => 'int',
		'id_agency' => 'int',
		'annio' => 'datetime',
		'id_ratesvalid' => 'int'
	];

	protected $fillable = [
		'id',
		'trip_no',
		'adult',
		'child',
		'type_rate',
		'id_agency',
		'company_name',
		'annio',
		'id_ratesvalid'
	];
}
