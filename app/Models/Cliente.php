<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string|null $username
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string $password
 * @property string|null $phone
 * @property string|null $celphone
 * @property string|null $city
 * @property string|null $state
 * @property string|null $country
 * @property string|null $address
 * @property string|null $zip
 * @property bool|null $tipo_client
 * @property string|null $birthday
 * @property string|null $fecha_r
 * @property float $points
 * @property float $left_points
 * @property float $paid_points
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'tipo_client' => 'bool',
		'points' => 'float',
		'left_points' => 'float',
		'paid_points' => 'float'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'id',
		'username',
		'firstname',
		'lastname',
		'password',
		'phone',
		'celphone',
		'city',
		'state',
		'country',
		'address',
		'zip',
		'tipo_client',
		'birthday',
		'fecha_r',
		'points',
		'left_points',
		'paid_points'
	];
}
