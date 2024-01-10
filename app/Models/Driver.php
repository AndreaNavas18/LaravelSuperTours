<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Driver
 * 
 * @property int $id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $phone
 * @property string|null $phone2
 * @property string|null $email
 * @property string|null $licensedriver
 * @property string|null $licensetype
 * @property string|null $ssegurity
 * @property string|null $address
 * @property string|null $city
 * @property string|null $zipcode
 * @property string|null $datehirin
 * @property string|null $datehirinfin
 * @property string|null $reasotermination
 * @property string|null $saludfechafin
 * @property string|null $hiringcompany
 * @property string|null $avatar
 *
 * @package App\Models
 */
class Driver extends Model
{
	protected $table = 'driver';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'firstname',
		'lastname',
		'phone',
		'phone2',
		'email',
		'licensedriver',
		'licensetype',
		'ssegurity',
		'address',
		'city',
		'zipcode',
		'datehirin',
		'datehirinfin',
		'reasotermination',
		'saludfechafin',
		'hiringcompany',
		'avatar'
	];
}
