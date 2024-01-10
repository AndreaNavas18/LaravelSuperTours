<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServicesDriver
 * 
 * @property int $id
 * @property int $id_service_type
 * @property int $id_driver
 * @property string|null $fecha
 *
 * @package App\Models
 */
class ServicesDriver extends Model
{
	protected $table = 'services_driver';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_service_type' => 'int',
		'id_driver' => 'int'
	];

	protected $fillable = [
		'id',
		'id_service_type',
		'id_driver',
		'fecha'
	];
}
