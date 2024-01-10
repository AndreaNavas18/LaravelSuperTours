<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PickupdropoffExten
 * 
 * @property int $id
 * @property int|null $id_extension
 * @property string|null $place
 * @property string|null $address
 *
 * @package App\Models
 */
class PickupdropoffExten extends Model
{
	protected $table = 'pickupdropoff_exten';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_extension' => 'int'
	];

	protected $fillable = [
		'id',
		'id_extension',
		'place',
		'address'
	];
}
