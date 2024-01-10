<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BonosRedimido
 * 
 * @property int $id
 * @property int $id_cliente
 * @property int $id_reserva
 * @property string $bono_id
 * @property int $paid_ammount
 * @property int $paid_points
 *
 * @package App\Models
 */
class BonosRedimido extends Model
{
	protected $table = 'bonos_redimidos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_cliente' => 'int',
		'id_reserva' => 'int',
		'paid_ammount' => 'int',
		'paid_points' => 'int'
	];

	protected $fillable = [
		'id',
		'id_cliente',
		'id_reserva',
		'bono_id',
		'paid_ammount',
		'paid_points'
	];
}
