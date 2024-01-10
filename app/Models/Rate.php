<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rate
 * 
 * @property int $id
 * @property float $price
 * @property float $price2
 * @property float $price3
 * @property float $price4
 * @property string $anno
 *
 * @package App\Models
 */
class Rate extends Model
{
	protected $table = 'rates';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'price' => 'float',
		'price2' => 'float',
		'price3' => 'float',
		'price4' => 'float'
	];

	protected $fillable = [
		'id',
		'price',
		'price2',
		'price3',
		'price4',
		'anno'
	];
}
