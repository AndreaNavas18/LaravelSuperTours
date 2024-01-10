<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cancelledinvoice
 * 
 * @property int $id
 * @property int $factura
 * @property string $motivo
 * @property string $adjunto
 *
 * @package App\Models
 */
class Cancelledinvoice extends Model
{
	protected $table = 'cancelledinvoices';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'factura' => 'int'
	];

	protected $fillable = [
		'id',
		'factura',
		'motivo',
		'adjunto'
	];
}
