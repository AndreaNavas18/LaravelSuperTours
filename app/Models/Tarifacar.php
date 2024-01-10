<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarifacar
 * 
 * @property int $id
 * @property float|null $price
 * @property int $type_rate
 * @property int $id_agency
 * @property string|null $company_name
 * @property Carbon $annio
 * @property int $id_ratesvalid
 *
 * @package App\Models
 */
class Tarifacar extends Model
{
	protected $table = 'tarifacar';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'price' => 'float',
		'type_rate' => 'int',
		'id_agency' => 'int',
		'annio' => 'datetime',
		'id_ratesvalid' => 'int'
	];

	protected $fillable = [
		'id',
		'price',
		'type_rate',
		'id_agency',
		'company_name',
		'annio',
		'id_ratesvalid'
	];
}
