<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AgencyAccount
 * 
 * @property int $id
 * @property int|null $id_agencia
 * @property string|null $person_charge
 * @property string|null $first_name
 * @property string|null $eemail
 * @property string|null $phone
 * @property string|null $acount
 * @property int|null $opcion1
 * @property int|null $opcion2
 * @property int|null $opcion3
 * @property int|null $opcion4
 * @property int|null $opcion5
 * @property int|null $days
 *
 * @package App\Models
 */
class AgencyAccount extends Model
{
	protected $table = 'agency_account';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_agencia' => 'int',
		'opcion1' => 'int',
		'opcion2' => 'int',
		'opcion3' => 'int',
		'opcion4' => 'int',
		'opcion5' => 'int',
		'days' => 'int'
	];

	protected $fillable = [
		'id',
		'id_agencia',
		'person_charge',
		'first_name',
		'eemail',
		'phone',
		'acount',
		'opcion1',
		'opcion2',
		'opcion3',
		'opcion4',
		'opcion5',
		'days'
	];
}
