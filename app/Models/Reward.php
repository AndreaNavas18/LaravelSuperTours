<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reward
 * 
 * @property int $id
 * @property string $code
 * @property string $reward_ticket
 * @property int $points
 * @property float $ammount_discount
 *
 * @package App\Models
 */
class Reward extends Model
{
	protected $table = 'rewards';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'points' => 'int',
		'ammount_discount' => 'float'
	];

	protected $fillable = [
		'id',
		'code',
		'reward_ticket',
		'points',
		'ammount_discount'
	];
}
