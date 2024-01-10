<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agencium
 * 
 * @property int $id
 * @property string|null $company_name
 * @property string|null $address
 * @property string|null $address2
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zipcode
 * @property string|null $main_email
 * @property string|null $country
 * @property string|null $manager
 * @property string|null $first_name
 * @property string|null $birthdate
 * @property string|null $position
 * @property string|null $phone1
 * @property string|null $phone2
 * @property string|null $fax
 * @property string|null $web_page
 * @property string|null $iata_clia
 * @property string|null $voucher_code
 * @property int $type_rate
 * @property int $precio_especial_exten
 * @property int $tax_edit
 * @property string|null $customer_since
 * @property string|null $last_sale_date
 * @property string $tour_name
 * @property string $tour_name2
 * @property string $tour_name3
 * @property string $tour_name4
 * @property string $tour_name5
 * @property int $id_tour
 * @property int $id_tour2
 * @property int $id_tour3
 * @property int $id_tour4
 * @property int $id_tour5
 * @property int $spt
 * @property string $special_price_name
 * @property string $tabla_ruta
 * @property string $img
 * @property int $type_pick
 * @property int $serv_transp
 * @property int $serv_oneday
 * @property int $serv_multiday
 *
 * @package App\Models
 */
class Agencium extends Model
{
	protected $table = 'agencia';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'type_rate' => 'int',
		'precio_especial_exten' => 'int',
		'tax_edit' => 'int',
		'id_tour' => 'int',
		'id_tour2' => 'int',
		'id_tour3' => 'int',
		'id_tour4' => 'int',
		'id_tour5' => 'int',
		'spt' => 'int',
		'type_pick' => 'int',
		'serv_transp' => 'int',
		'serv_oneday' => 'int',
		'serv_multiday' => 'int'
	];

	protected $fillable = [
		'id',
		'company_name',
		'address',
		'address2',
		'city',
		'state',
		'zipcode',
		'main_email',
		'country',
		'manager',
		'first_name',
		'birthdate',
		'position',
		'phone1',
		'phone2',
		'fax',
		'web_page',
		'iata_clia',
		'voucher_code',
		'type_rate',
		'precio_especial_exten',
		'tax_edit',
		'customer_since',
		'last_sale_date',
		'tour_name',
		'tour_name2',
		'tour_name3',
		'tour_name4',
		'tour_name5',
		'id_tour',
		'id_tour2',
		'id_tour3',
		'id_tour4',
		'id_tour5',
		'spt',
		'special_price_name',
		'tabla_ruta',
		'img',
		'type_pick',
		'serv_transp',
		'serv_oneday',
		'serv_multiday'
	];
}
