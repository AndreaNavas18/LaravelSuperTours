<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientBono
 * 
 * @property int $id
 * @property int $client_id
 * @property int $reserve_id
 * @property string $bono_id
 * @property string|null $bono_nombre
 * @property int $points
 * @property Carbon $valid_until
 * @property bool $active
 * @property int $ammount
 * @property float $discuont_value
 *
 * @package App\Models
 */
class ClientBono extends Model
{
	protected $table = 'client_bonos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'client_id' => 'int',
		'reserve_id' => 'int',
		'points' => 'int',
		'valid_until' => 'datetime',
		'active' => 'bool',
		'ammount' => 'int',
		'discuont_value' => 'float'
	];

	protected $fillable = [
		'id',
		'client_id',
		'reserve_id',
		'bono_id',
		'bono_nombre',
		'points',
		'valid_until',
		'active',
		'ammount',
		'discuont_value'
	];
}
