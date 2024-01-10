<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * 
 * @property int $id
 * @property string $name
 * @property int $code
 * @property string $abb
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'country';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'code' => 'int'
	];

	protected $fillable = [
		'id',
		'name',
		'code',
		'abb'
	];
}
