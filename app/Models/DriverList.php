<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DriverList
 * 
 * @property int $id
 * @property string $conductor
 *
 * @package App\Models
 */
class DriverList extends Model
{
	protected $table = 'driver_list';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'conductor'
	];
}
