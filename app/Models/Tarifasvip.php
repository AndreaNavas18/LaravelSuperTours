<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarifasvip
 * 
 * @property int $id
 * @property int|null $cantidad
 * @property float|null $price
 * @property int $type_rate
 * @property int $id_agency
 * @property string|null $company_name
 * @property Carbon $annio
 *
 * @package App\Models
 */
class Tarifasvip extends Model
{
	protected $table = 'tarifasvip';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'cantidad' => 'int',
		'price' => 'float',
		'type_rate' => 'int',
		'id_agency' => 'int',
		'annio' => 'datetime'
	];

	protected $fillable = [
		'id',
		'cantidad',
		'price',
		'type_rate',
		'id_agency',
		'company_name',
		'annio'
	];
}
