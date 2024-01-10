<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 * 
 * @property int $id
 * @property int $id_agency
 * @property Carbon $creation_date
 * @property float $subtotal
 * @property float $collect
 * @property float $total
 * @property string|null $canal
 * @property string $estado
 *
 * @package App\Models
 */
class Factura extends Model
{
	protected $table = 'factura';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_agency' => 'int',
		'creation_date' => 'datetime',
		'subtotal' => 'float',
		'collect' => 'float',
		'total' => 'float'
	];

	protected $fillable = [
		'id',
		'id_agency',
		'creation_date',
		'subtotal',
		'collect',
		'total',
		'canal',
		'estado'
	];
}
