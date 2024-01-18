<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 * 
 * @property int $id
 * @property int $area_from
 * @property int $area_to
 * @property int|null $minutes
 *
 * @package App\Models
 */
class AuthorizedDestinations extends Model
{
	protected $table = 'authorized_destinations';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'area_from' => 'int',
		'area_to' => 'int',
		'minutes' => 'int'
	];

	protected $fillable = [
		'id',
		'area_from',
		'area_to',
        'minutes'
	];
}
