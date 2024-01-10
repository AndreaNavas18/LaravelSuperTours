<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelReserf
 * 
 * @property int $id
 * @property string $hotel_name
 * @property int $id_hotel
 * @property int $id_tours
 * @property string $category
 * @property int|null $days
 * @property int|null $nights
 * @property Carbon $creation_date
 * @property Carbon $starting_date
 * @property Carbon $ending_date
 * @property int $id_cliente
 * @property int $type_client
 * @property int $id_agencia
 * @property int|null $roooms
 * @property int|null $adult
 * @property int|null $child
 * @property int|null $total_persons
 * @property int|null $room1_adult
 * @property int|null $room1_child
 * @property int|null $room2_adult
 * @property int|null $room2_child
 * @property int|null $room3_adult
 * @property int|null $room3_child
 * @property int|null $room4_adult
 * @property int|null $room4_child
 * @property float $sql
 * @property float $dbl
 * @property float $tpl
 * @property float $qua
 * @property int|null $sql_indicativo
 * @property int|null $dbl_indicativo
 * @property int|null $tpl_indicativo
 * @property int|null $qua_indicativo
 * @property int|null $room1
 * @property int|null $room2
 * @property int|null $room3
 * @property int|null $room4
 * @property int|null $room1_c
 * @property int|null $room2_c
 * @property int|null $room3_c
 * @property int|null $room4_c
 * @property string|null $type
 * @property int|null $additional_night
 * @property int $free_night
 * @property int $free_night_buffet
 * @property int $nightprice
 * @property float $breakfastprice
 * @property int $totalnights
 * @property float $totalbreakfasts
 * @property float|null $total_paid
 * @property bool $buffet
 * @property bool $super_breakfast
 * @property int $freeday
 *
 * @package App\Models
 */
class HotelReserf extends Model
{
	protected $table = 'hotel_reserves';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_hotel' => 'int',
		'id_tours' => 'int',
		'days' => 'int',
		'nights' => 'int',
		'creation_date' => 'datetime',
		'starting_date' => 'datetime',
		'ending_date' => 'datetime',
		'id_cliente' => 'int',
		'type_client' => 'int',
		'id_agencia' => 'int',
		'roooms' => 'int',
		'adult' => 'int',
		'child' => 'int',
		'total_persons' => 'int',
		'room1_adult' => 'int',
		'room1_child' => 'int',
		'room2_adult' => 'int',
		'room2_child' => 'int',
		'room3_adult' => 'int',
		'room3_child' => 'int',
		'room4_adult' => 'int',
		'room4_child' => 'int',
		'sql' => 'float',
		'dbl' => 'float',
		'tpl' => 'float',
		'qua' => 'float',
		'sql_indicativo' => 'int',
		'dbl_indicativo' => 'int',
		'tpl_indicativo' => 'int',
		'qua_indicativo' => 'int',
		'room1' => 'int',
		'room2' => 'int',
		'room3' => 'int',
		'room4' => 'int',
		'room1_c' => 'int',
		'room2_c' => 'int',
		'room3_c' => 'int',
		'room4_c' => 'int',
		'additional_night' => 'int',
		'free_night' => 'int',
		'free_night_buffet' => 'int',
		'nightprice' => 'int',
		'breakfastprice' => 'float',
		'totalnights' => 'int',
		'totalbreakfasts' => 'float',
		'total_paid' => 'float',
		'buffet' => 'bool',
		'super_breakfast' => 'bool',
		'freeday' => 'int'
	];

	protected $fillable = [
		'id',
		'hotel_name',
		'id_hotel',
		'id_tours',
		'category',
		'days',
		'nights',
		'creation_date',
		'starting_date',
		'ending_date',
		'id_cliente',
		'type_client',
		'id_agencia',
		'roooms',
		'adult',
		'child',
		'total_persons',
		'room1_adult',
		'room1_child',
		'room2_adult',
		'room2_child',
		'room3_adult',
		'room3_child',
		'room4_adult',
		'room4_child',
		'sql',
		'dbl',
		'tpl',
		'qua',
		'sql_indicativo',
		'dbl_indicativo',
		'tpl_indicativo',
		'qua_indicativo',
		'room1',
		'room2',
		'room3',
		'room4',
		'room1_c',
		'room2_c',
		'room3_c',
		'room4_c',
		'type',
		'additional_night',
		'free_night',
		'free_night_buffet',
		'nightprice',
		'breakfastprice',
		'totalnights',
		'totalbreakfasts',
		'total_paid',
		'buffet',
		'super_breakfast',
		'freeday'
	];
}
