<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Onetour
 * 
 * @property int $id
 * @property int $priceadult
 * @property int $pricechild
 * @property float $suplemag_adult
 * @property float $suplemag_child
 * @property float $suplepcot_adult
 * @property float $suplepcot_child
 * @property float $suplehollywood_adult
 * @property float $suplehollywood_child
 * @property float $supleanimalk_adult
 * @property float $supleanimalk_child
 * @property float $suplemuniv_adult
 * @property float $suplemuniv_child
 * @property float $suplemisland_adult
 * @property float $suplemisland_child
 * @property float $suplemseaw_adult
 * @property float $suplemseaw_child
 * @property float $suplemaquat_adult
 * @property float $suplemaquat_child
 * @property float $suplemwetn_adult
 * @property float $suplemwetn_child
 * @property float $suplembliz_adult
 * @property float $suplembliz_child
 * @property float $suplemkennedy_adult
 * @property float $suplemkennedy_child
 * @property float $suplemholy_adult
 * @property float $suplemholy_child
 * @property int $type_rate
 * @property int $id_agency
 * @property string $company_name
 * @property Carbon $annio
 * @property int $priceadult_WDW
 * @property int $pricechild_WDW
 * @property int $priceadult_UNIVP
 * @property int $pricechild_UNIVP
 * @property int $priceadult_SEAW
 * @property int $pricechild_SEAW
 * @property int $priceadult_WATERP
 * @property int $pricechild_WATERP
 * @property int $priceadult_HOLYLAND
 * @property int $pricechild_HOLYLAND
 * @property int $priceadult_KENNEDYSPC
 * @property int $pricechild_KENNEDYSPC
 * @property int $priceadult_MAGIC
 * @property int $pricechild_MAGIC
 * @property string $start_date
 * @property string $end_date
 *
 * @package App\Models
 */
class Onetour extends Model
{
	protected $table = 'onetour';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'priceadult' => 'int',
		'pricechild' => 'int',
		'suplemag_adult' => 'float',
		'suplemag_child' => 'float',
		'suplepcot_adult' => 'float',
		'suplepcot_child' => 'float',
		'suplehollywood_adult' => 'float',
		'suplehollywood_child' => 'float',
		'supleanimalk_adult' => 'float',
		'supleanimalk_child' => 'float',
		'suplemuniv_adult' => 'float',
		'suplemuniv_child' => 'float',
		'suplemisland_adult' => 'float',
		'suplemisland_child' => 'float',
		'suplemseaw_adult' => 'float',
		'suplemseaw_child' => 'float',
		'suplemaquat_adult' => 'float',
		'suplemaquat_child' => 'float',
		'suplemwetn_adult' => 'float',
		'suplemwetn_child' => 'float',
		'suplembliz_adult' => 'float',
		'suplembliz_child' => 'float',
		'suplemkennedy_adult' => 'float',
		'suplemkennedy_child' => 'float',
		'suplemholy_adult' => 'float',
		'suplemholy_child' => 'float',
		'type_rate' => 'int',
		'id_agency' => 'int',
		'annio' => 'datetime',
		'priceadult_WDW' => 'int',
		'pricechild_WDW' => 'int',
		'priceadult_UNIVP' => 'int',
		'pricechild_UNIVP' => 'int',
		'priceadult_SEAW' => 'int',
		'pricechild_SEAW' => 'int',
		'priceadult_WATERP' => 'int',
		'pricechild_WATERP' => 'int',
		'priceadult_HOLYLAND' => 'int',
		'pricechild_HOLYLAND' => 'int',
		'priceadult_KENNEDYSPC' => 'int',
		'pricechild_KENNEDYSPC' => 'int',
		'priceadult_MAGIC' => 'int',
		'pricechild_MAGIC' => 'int'
	];

	protected $fillable = [
		'id',
		'priceadult',
		'pricechild',
		'suplemag_adult',
		'suplemag_child',
		'suplepcot_adult',
		'suplepcot_child',
		'suplehollywood_adult',
		'suplehollywood_child',
		'supleanimalk_adult',
		'supleanimalk_child',
		'suplemuniv_adult',
		'suplemuniv_child',
		'suplemisland_adult',
		'suplemisland_child',
		'suplemseaw_adult',
		'suplemseaw_child',
		'suplemaquat_adult',
		'suplemaquat_child',
		'suplemwetn_adult',
		'suplemwetn_child',
		'suplembliz_adult',
		'suplembliz_child',
		'suplemkennedy_adult',
		'suplemkennedy_child',
		'suplemholy_adult',
		'suplemholy_child',
		'type_rate',
		'id_agency',
		'company_name',
		'annio',
		'priceadult_WDW',
		'pricechild_WDW',
		'priceadult_UNIVP',
		'pricechild_UNIVP',
		'priceadult_SEAW',
		'pricechild_SEAW',
		'priceadult_WATERP',
		'pricechild_WATERP',
		'priceadult_HOLYLAND',
		'pricechild_HOLYLAND',
		'priceadult_KENNEDYSPC',
		'pricechild_KENNEDYSPC',
		'priceadult_MAGIC',
		'pricechild_MAGIC',
		'start_date',
		'end_date'
	];
}
