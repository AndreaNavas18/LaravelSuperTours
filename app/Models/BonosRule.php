<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BonosRule
 * 
 * @property int $id
 * @property string $tipo_bono
 * @property float $valor
 * @property int $vencimiento
 *
 * @package App\Models
 */
class BonosRule extends Model
{
	protected $table = 'bonos_rules';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'valor' => 'float',
		'vencimiento' => 'int'
	];

	protected $fillable = [
		'id',
		'tipo_bono',
		'valor',
		'vencimiento'
	];
}
