<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clientes2
 * 
 * @property int $id
 * @property string|null $username
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $password
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
 * @property float|null $points
 * @property float|null $left_points
 * @property float|null $paid_points
 *
 * @package App\Models
 */
class Clientes2 extends Model
{
	protected $table = 'clientes2';
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
