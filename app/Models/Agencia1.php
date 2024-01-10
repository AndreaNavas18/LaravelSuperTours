<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agencia1
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
 * @property string|null $tour_name
 * @property int $id_tour
 * @property int $spt
 * @property string $special_price_name
 *
 * @package App\Models
 */
class Agencia1 extends Model
{
	protected $table = 'agencia1';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'type_rate' => 'int',
		'precio_especial_exten' => 'int',
		'tax_edit' => 'int',
		'id_tour' => 'int',
		'spt' => 'int'
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
		'id_tour',
		'spt',
		'special_price_name'
	];
}
