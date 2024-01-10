<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $role
 * @property string $descripcion
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'role',
		'descripcion'
	];
}
