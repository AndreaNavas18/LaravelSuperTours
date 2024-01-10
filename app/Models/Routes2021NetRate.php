<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Routes2021NetRate
 * 
 * @property int $id
 * @property string $trip_from
 * @property string $trip_to
 * @property string $trip_no
 * @property float $price
 * @property float $price2
 * @property float $price3
 * @property float $price4
 * @property string $trip_departure
 * @property string $trip_arrival
 * @property string $anno
 * @property int $type_rate
 * @property int $id_agency
 * @property Carbon|null $fecha_ini
 * @property Carbon|null $fecha_fin
 * @property float $prcnet_adult
 * @property float $prcnet_child
 * @property float $prcweb_adult
 * @property float $prcweb_child
 * @property float $univext
 * @property float $wdext
 * @property float $f1t3
 * @property float $f1t4
 * @property float $f1t5
 * @property float $f1t6
 * @property float $f1t7
 * @property float $f1t8
 * @property float $f1t9
 * @property float $f1t10
 * @property float $f1t19
 * @property float $f1t11
 * @property float $f1t12
 * @property float $f1t13
 * @property float $f1t14
 * @property float $f2t3
 * @property float $f2t4
 * @property float $f2t5
 * @property float $f2t6
 * @property float $f2t7
 * @property float $f2t8
 * @property float $f2t9
 * @property float $f2t10
 * @property float $f2t19
 * @property float $f2t11
 * @property float $f2t12
 * @property float $f2t13
 * @property float $f2t14
 * @property float $f3t4
 * @property float $f3t5
 * @property float $f3t6
 * @property float $f3t7
 * @property float $f3t8
 * @property float $f3t9
 * @property float $f3t10
 * @property float $f3t19
 * @property float $f3t11
 * @property float $f3t12
 * @property float $f3t13
 * @property float $f3t14
 * @property float $f4t5
 * @property float $f4t6
 * @property float $f4t7
 * @property float $f4t8
 * @property float $f4t9
 * @property float $f4t10
 * @property float $f4t19
 * @property float $f4t11
 * @property float $f4t12
 * @property float $f4t13
 * @property float $f4t14
 * @property float $f5t6
 * @property float $f5t7
 * @property float $f5t8
 * @property float $f5t9
 * @property float $f5t10
 * @property float $f5t19
 * @property float $f5t11
 * @property float $f5t12
 * @property float $f5t13
 * @property float $f5t14
 * @property int $spt
 * @property string $special_price_name
 *
 * @package App\Models
 */
class Routes2021NetRate extends Model
{
	protected $table = 'routes_2021_net_rates';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'price' => 'float',
		'price2' => 'float',
		'price3' => 'float',
		'price4' => 'float',
		'type_rate' => 'int',
		'id_agency' => 'int',
		'fecha_ini' => 'datetime',
		'fecha_fin' => 'datetime',
		'prcnet_adult' => 'float',
		'prcnet_child' => 'float',
		'prcweb_adult' => 'float',
		'prcweb_child' => 'float',
		'univext' => 'float',
		'wdext' => 'float',
		'f1t3' => 'float',
		'f1t4' => 'float',
		'f1t5' => 'float',
		'f1t6' => 'float',
		'f1t7' => 'float',
		'f1t8' => 'float',
		'f1t9' => 'float',
		'f1t10' => 'float',
		'f1t19' => 'float',
		'f1t11' => 'float',
		'f1t12' => 'float',
		'f1t13' => 'float',
		'f1t14' => 'float',
		'f2t3' => 'float',
		'f2t4' => 'float',
		'f2t5' => 'float',
		'f2t6' => 'float',
		'f2t7' => 'float',
		'f2t8' => 'float',
		'f2t9' => 'float',
		'f2t10' => 'float',
		'f2t19' => 'float',
		'f2t11' => 'float',
		'f2t12' => 'float',
		'f2t13' => 'float',
		'f2t14' => 'float',
		'f3t4' => 'float',
		'f3t5' => 'float',
		'f3t6' => 'float',
		'f3t7' => 'float',
		'f3t8' => 'float',
		'f3t9' => 'float',
		'f3t10' => 'float',
		'f3t19' => 'float',
		'f3t11' => 'float',
		'f3t12' => 'float',
		'f3t13' => 'float',
		'f3t14' => 'float',
		'f4t5' => 'float',
		'f4t6' => 'float',
		'f4t7' => 'float',
		'f4t8' => 'float',
		'f4t9' => 'float',
		'f4t10' => 'float',
		'f4t19' => 'float',
		'f4t11' => 'float',
		'f4t12' => 'float',
		'f4t13' => 'float',
		'f4t14' => 'float',
		'f5t6' => 'float',
		'f5t7' => 'float',
		'f5t8' => 'float',
		'f5t9' => 'float',
		'f5t10' => 'float',
		'f5t19' => 'float',
		'f5t11' => 'float',
		'f5t12' => 'float',
		'f5t13' => 'float',
		'f5t14' => 'float',
		'spt' => 'int'
	];

	protected $fillable = [
		'id',
		'trip_from',
		'trip_to',
		'trip_no',
		'price',
		'price2',
		'price3',
		'price4',
		'trip_departure',
		'trip_arrival',
		'anno',
		'type_rate',
		'id_agency',
		'fecha_ini',
		'fecha_fin',
		'prcnet_adult',
		'prcnet_child',
		'prcweb_adult',
		'prcweb_child',
		'univext',
		'wdext',
		'f1t3',
		'f1t4',
		'f1t5',
		'f1t6',
		'f1t7',
		'f1t8',
		'f1t9',
		'f1t10',
		'f1t19',
		'f1t11',
		'f1t12',
		'f1t13',
		'f1t14',
		'f2t3',
		'f2t4',
		'f2t5',
		'f2t6',
		'f2t7',
		'f2t8',
		'f2t9',
		'f2t10',
		'f2t19',
		'f2t11',
		'f2t12',
		'f2t13',
		'f2t14',
		'f3t4',
		'f3t5',
		'f3t6',
		'f3t7',
		'f3t8',
		'f3t9',
		'f3t10',
		'f3t19',
		'f3t11',
		'f3t12',
		'f3t13',
		'f3t14',
		'f4t5',
		'f4t6',
		'f4t7',
		'f4t8',
		'f4t9',
		'f4t10',
		'f4t19',
		'f4t11',
		'f4t12',
		'f4t13',
		'f4t14',
		'f5t6',
		'f5t7',
		'f5t8',
		'f5t9',
		'f5t10',
		'f5t19',
		'f5t11',
		'f5t12',
		'f5t13',
		'f5t14',
		'spt',
		'special_price_name'
	];
}
