<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolesOpcione
 * 
 * @property int $role_id
 * @property string $opcion
 *
 * @package App\Models
 */
class RolesOpcione extends Model
{
	protected $table = 'roles_opciones';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int'
	];

	protected $fillable = [
		'role_id',
		'opcion'
	];
}
