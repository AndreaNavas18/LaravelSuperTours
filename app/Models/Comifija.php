<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comifija
 * 
 * @property int $id
 * @property int|null $id_hotel
 * @property int $categoria
 * @property float $sgl
 * @property float $dbl
 * @property float $tpl
 * @property float $qua
 * @property float $sgl2
 * @property float $dbl2
 * @property float $tpl2
 * @property float $qua2
 * @property float $sgl3
 * @property float $dbl3
 * @property float $tpl3
 * @property float $qua3
 * @property float $sgl4
 * @property float $dbl4
 * @property float $tpl4
 * @property float $qua4
 * @property float $sgl5
 * @property float $dbl5
 * @property float $tpl5
 * @property float $qua5
 * @property float $sgl6
 * @property float $dbl6
 * @property float $tpl6
 * @property float $qua6
 * @property float $sgl7
 * @property float $dbl7
 * @property float $tpl7
 * @property float $qua7
 * @property float $sgl8
 * @property float $dbl8
 * @property float $tpl8
 * @property float $qua8
 * @property float $sglm
 * @property float $dblm
 * @property float $tplm
 * @property float $quam
 * @property float $sglm2
 * @property float $dblm2
 * @property float $tplm2
 * @property float $quam2
 * @property float $sglm3
 * @property float $dblm3
 * @property float $tplm3
 * @property float $quam3
 * @property float $sglm4
 * @property float $dblm4
 * @property float $tplm4
 * @property float $quam4
 * @property float $sglm5
 * @property float $dblm5
 * @property float $tplm5
 * @property float $quam5
 * @property float $sglm6
 * @property float $dblm6
 * @property float $tplm6
 * @property float $quam6
 * @property float $sglm7
 * @property float $dblm7
 * @property float $tplm7
 * @property float $quam7
 * @property float $sglm8
 * @property float $dblm8
 * @property float $tplm8
 * @property float $quam8
 * @property float $sgld
 * @property float $dbld
 * @property float $tpld
 * @property float $quad
 * @property float $sgld2
 * @property float $dbld2
 * @property float $tpld2
 * @property float $quad2
 * @property float $sgld3
 * @property float $dbld3
 * @property float $tpld3
 * @property float $quad3
 * @property float $sgld4
 * @property float $dbld4
 * @property float $tpld4
 * @property float $quad4
 * @property float $sgld5
 * @property float $dbld5
 * @property float $tpld5
 * @property float $quad5
 * @property float $sgld6
 * @property float $dbld6
 * @property float $tpld6
 * @property float $quad6
 * @property float $sgld7
 * @property float $dbld7
 * @property float $tpld7
 * @property float $quad7
 * @property float $sgld8
 * @property float $dbld8
 * @property float $tpld8
 * @property float $quad8
 * @property float $chv21
 * @property float $chm21
 * @property float $chd21
 * @property float $chv32
 * @property float $chm32
 * @property float $chd32
 * @property float $chv43
 * @property float $chm43
 * @property float $chd43
 * @property float $chv54
 * @property float $chm54
 * @property float $chd54
 * @property float $chv65
 * @property float $chm65
 * @property float $chd65
 * @property float $chv76
 * @property float $chm76
 * @property float $chd76
 * @property float $chv87
 * @property float $chm87
 * @property float $chd87
 * @property float $chv98
 * @property float $chm98
 * @property float $chd98
 * @property int $costax
 * @property int $netax
 * @property int $comtax
 * @property int|null $id_ratesvalid
 * @property float|null $breackfast
 * @property string|null $fecha_ini
 * @property string|null $fecha_fin
 * @property float $fdv_adult21
 * @property float $fdv_child21
 * @property float $fdm_adult21
 * @property float $fdm_child21
 * @property float $fdd_adult21
 * @property float $fdd_child21
 * @property float $fdv_adult32
 * @property float $fdv_child32
 * @property float $fdm_adult32
 * @property float $fdm_child32
 * @property float $fdd_adult32
 * @property float $fdd_child32
 * @property float $fdv_adult43
 * @property float $fdv_child43
 * @property float $fdm_adult43
 * @property float $fdm_child43
 * @property float $fdd_adult43
 * @property float $fdd_child43
 * @property float $fdv_adult54
 * @property float $fdv_child54
 * @property float $fdm_adult54
 * @property float $fdm_child54
 * @property float $fdd_adult54
 * @property float $fdd_child54
 * @property float $fdv_adult65
 * @property float $fdv_child65
 * @property float $fdm_adult65
 * @property float $fdm_child65
 * @property float $fdd_adult65
 * @property float $fdd_child65
 * @property float $fdv_adult76
 * @property float $fdv_child76
 * @property float $fdm_adult76
 * @property float $fdm_child76
 * @property float $fdd_adult76
 * @property float $fdd_child76
 * @property float $fdv_adult87
 * @property float $fdv_child87
 * @property float $fdm_adult87
 * @property float $fdm_child87
 * @property float $fdd_adult87
 * @property float $fdd_child87
 * @property float $fdv_adult98
 * @property float $fdv_child98
 * @property float $fdm_adult98
 * @property float $fdm_child98
 * @property float $fdd_adult98
 * @property float $fdd_child98
 * @property float $trip100
 * @property float $trip200
 * @property float $trip300
 * @property float $trip101
 * @property float $trip201
 * @property float $trip301
 * @property float $trip100c
 * @property float $trip200c
 * @property float $trip300c
 * @property float $trip101c
 * @property float $trip201c
 * @property float $trip301c
 * @property float $t_in
 * @property float $t_out
 * @property float $car_in
 * @property float $car_out
 * @property float $schv
 * @property float $schm
 * @property float $schd
 * @property float $schv2
 * @property float $schm2
 * @property float $schd2
 * @property float $schv3
 * @property float $schm3
 * @property float $schd3
 * @property float $schv4
 * @property float $schm4
 * @property float $schd4
 * @property string $dupli
 * @property string|null $fecha_schv
 * @property string|null $fecha_schm
 * @property string|null $fecha_schv2
 * @property string|null $fecha_schm2
 * @property string|null $fecha_schv3
 * @property string|null $fecha_schm3
 * @property string|null $fecha_schv4
 * @property string|null $fecha_schm4
 * @property float $pax1v_21
 * @property float $pax2v_21
 * @property float $pax1m_21
 * @property float $pax2m_21
 * @property float $pax1d_21
 * @property float $pax2d_21
 * @property float $pax1v_32
 * @property float $pax2v_32
 * @property float $pax1m_32
 * @property float $pax2m_32
 * @property float $pax1d_32
 * @property float $pax2d_32
 * @property float $pax1v_43
 * @property float $pax2v_43
 * @property float $pax1m_43
 * @property float $pax2m_43
 * @property float $pax1d_43
 * @property float $pax2d_43
 * @property float $pax1v_54
 * @property float $pax2v_54
 * @property float $pax1m_54
 * @property float $pax2m_54
 * @property float $pax1d_54
 * @property float $pax2d_54
 * @property float $pax1v_65
 * @property float $pax2v_65
 * @property float $pax1m_65
 * @property float $pax2m_65
 * @property float $pax1d_65
 * @property float $pax2d_65
 * @property float $pax1v_76
 * @property float $pax2v_76
 * @property float $pax1m_76
 * @property float $pax2m_76
 * @property float $pax1d_76
 * @property float $pax2d_76
 * @property float $pax1v_87
 * @property float $pax2v_87
 * @property float $pax1m_87
 * @property float $pax2m_87
 * @property float $pax1d_87
 * @property float $pax2d_87
 * @property float $pax1v_98
 * @property float $pax2v_98
 * @property float $pax1m_98
 * @property float $pax2m_98
 * @property float $pax1d_98
 * @property float $pax2d_98
 *
 * @package App\Models
 */
class Comifija extends Model
{
	protected $table = 'comifijas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_hotel' => 'int',
		'categoria' => 'int',
		'sgl' => 'float',
		'dbl' => 'float',
		'tpl' => 'float',
		'qua' => 'float',
		'sgl2' => 'float',
		'dbl2' => 'float',
		'tpl2' => 'float',
		'qua2' => 'float',
		'sgl3' => 'float',
		'dbl3' => 'float',
		'tpl3' => 'float',
		'qua3' => 'float',
		'sgl4' => 'float',
		'dbl4' => 'float',
		'tpl4' => 'float',
		'qua4' => 'float',
		'sgl5' => 'float',
		'dbl5' => 'float',
		'tpl5' => 'float',
		'qua5' => 'float',
		'sgl6' => 'float',
		'dbl6' => 'float',
		'tpl6' => 'float',
		'qua6' => 'float',
		'sgl7' => 'float',
		'dbl7' => 'float',
		'tpl7' => 'float',
		'qua7' => 'float',
		'sgl8' => 'float',
		'dbl8' => 'float',
		'tpl8' => 'float',
		'qua8' => 'float',
		'sglm' => 'float',
		'dblm' => 'float',
		'tplm' => 'float',
		'quam' => 'float',
		'sglm2' => 'float',
		'dblm2' => 'float',
		'tplm2' => 'float',
		'quam2' => 'float',
		'sglm3' => 'float',
		'dblm3' => 'float',
		'tplm3' => 'float',
		'quam3' => 'float',
		'sglm4' => 'float',
		'dblm4' => 'float',
		'tplm4' => 'float',
		'quam4' => 'float',
		'sglm5' => 'float',
		'dblm5' => 'float',
		'tplm5' => 'float',
		'quam5' => 'float',
		'sglm6' => 'float',
		'dblm6' => 'float',
		'tplm6' => 'float',
		'quam6' => 'float',
		'sglm7' => 'float',
		'dblm7' => 'float',
		'tplm7' => 'float',
		'quam7' => 'float',
		'sglm8' => 'float',
		'dblm8' => 'float',
		'tplm8' => 'float',
		'quam8' => 'float',
		'sgld' => 'float',
		'dbld' => 'float',
		'tpld' => 'float',
		'quad' => 'float',
		'sgld2' => 'float',
		'dbld2' => 'float',
		'tpld2' => 'float',
		'quad2' => 'float',
		'sgld3' => 'float',
		'dbld3' => 'float',
		'tpld3' => 'float',
		'quad3' => 'float',
		'sgld4' => 'float',
		'dbld4' => 'float',
		'tpld4' => 'float',
		'quad4' => 'float',
		'sgld5' => 'float',
		'dbld5' => 'float',
		'tpld5' => 'float',
		'quad5' => 'float',
		'sgld6' => 'float',
		'dbld6' => 'float',
		'tpld6' => 'float',
		'quad6' => 'float',
		'sgld7' => 'float',
		'dbld7' => 'float',
		'tpld7' => 'float',
		'quad7' => 'float',
		'sgld8' => 'float',
		'dbld8' => 'float',
		'tpld8' => 'float',
		'quad8' => 'float',
		'chv21' => 'float',
		'chm21' => 'float',
		'chd21' => 'float',
		'chv32' => 'float',
		'chm32' => 'float',
		'chd32' => 'float',
		'chv43' => 'float',
		'chm43' => 'float',
		'chd43' => 'float',
		'chv54' => 'float',
		'chm54' => 'float',
		'chd54' => 'float',
		'chv65' => 'float',
		'chm65' => 'float',
		'chd65' => 'float',
		'chv76' => 'float',
		'chm76' => 'float',
		'chd76' => 'float',
		'chv87' => 'float',
		'chm87' => 'float',
		'chd87' => 'float',
		'chv98' => 'float',
		'chm98' => 'float',
		'chd98' => 'float',
		'costax' => 'int',
		'netax' => 'int',
		'comtax' => 'int',
		'id_ratesvalid' => 'int',
		'breackfast' => 'float',
		'fdv_adult21' => 'float',
		'fdv_child21' => 'float',
		'fdm_adult21' => 'float',
		'fdm_child21' => 'float',
		'fdd_adult21' => 'float',
		'fdd_child21' => 'float',
		'fdv_adult32' => 'float',
		'fdv_child32' => 'float',
		'fdm_adult32' => 'float',
		'fdm_child32' => 'float',
		'fdd_adult32' => 'float',
		'fdd_child32' => 'float',
		'fdv_adult43' => 'float',
		'fdv_child43' => 'float',
		'fdm_adult43' => 'float',
		'fdm_child43' => 'float',
		'fdd_adult43' => 'float',
		'fdd_child43' => 'float',
		'fdv_adult54' => 'float',
		'fdv_child54' => 'float',
		'fdm_adult54' => 'float',
		'fdm_child54' => 'float',
		'fdd_adult54' => 'float',
		'fdd_child54' => 'float',
		'fdv_adult65' => 'float',
		'fdv_child65' => 'float',
		'fdm_adult65' => 'float',
		'fdm_child65' => 'float',
		'fdd_adult65' => 'float',
		'fdd_child65' => 'float',
		'fdv_adult76' => 'float',
		'fdv_child76' => 'float',
		'fdm_adult76' => 'float',
		'fdm_child76' => 'float',
		'fdd_adult76' => 'float',
		'fdd_child76' => 'float',
		'fdv_adult87' => 'float',
		'fdv_child87' => 'float',
		'fdm_adult87' => 'float',
		'fdm_child87' => 'float',
		'fdd_adult87' => 'float',
		'fdd_child87' => 'float',
		'fdv_adult98' => 'float',
		'fdv_child98' => 'float',
		'fdm_adult98' => 'float',
		'fdm_child98' => 'float',
		'fdd_adult98' => 'float',
		'fdd_child98' => 'float',
		'trip100' => 'float',
		'trip200' => 'float',
		'trip300' => 'float',
		'trip101' => 'float',
		'trip201' => 'float',
		'trip301' => 'float',
		'trip100c' => 'float',
		'trip200c' => 'float',
		'trip300c' => 'float',
		'trip101c' => 'float',
		'trip201c' => 'float',
		'trip301c' => 'float',
		't_in' => 'float',
		't_out' => 'float',
		'car_in' => 'float',
		'car_out' => 'float',
		'schv' => 'float',
		'schm' => 'float',
		'schd' => 'float',
		'schv2' => 'float',
		'schm2' => 'float',
		'schd2' => 'float',
		'schv3' => 'float',
		'schm3' => 'float',
		'schd3' => 'float',
		'schv4' => 'float',
		'schm4' => 'float',
		'schd4' => 'float',
		'pax1v_21' => 'float',
		'pax2v_21' => 'float',
		'pax1m_21' => 'float',
		'pax2m_21' => 'float',
		'pax1d_21' => 'float',
		'pax2d_21' => 'float',
		'pax1v_32' => 'float',
		'pax2v_32' => 'float',
		'pax1m_32' => 'float',
		'pax2m_32' => 'float',
		'pax1d_32' => 'float',
		'pax2d_32' => 'float',
		'pax1v_43' => 'float',
		'pax2v_43' => 'float',
		'pax1m_43' => 'float',
		'pax2m_43' => 'float',
		'pax1d_43' => 'float',
		'pax2d_43' => 'float',
		'pax1v_54' => 'float',
		'pax2v_54' => 'float',
		'pax1m_54' => 'float',
		'pax2m_54' => 'float',
		'pax1d_54' => 'float',
		'pax2d_54' => 'float',
		'pax1v_65' => 'float',
		'pax2v_65' => 'float',
		'pax1m_65' => 'float',
		'pax2m_65' => 'float',
		'pax1d_65' => 'float',
		'pax2d_65' => 'float',
		'pax1v_76' => 'float',
		'pax2v_76' => 'float',
		'pax1m_76' => 'float',
		'pax2m_76' => 'float',
		'pax1d_76' => 'float',
		'pax2d_76' => 'float',
		'pax1v_87' => 'float',
		'pax2v_87' => 'float',
		'pax1m_87' => 'float',
		'pax2m_87' => 'float',
		'pax1d_87' => 'float',
		'pax2d_87' => 'float',
		'pax1v_98' => 'float',
		'pax2v_98' => 'float',
		'pax1m_98' => 'float',
		'pax2m_98' => 'float',
		'pax1d_98' => 'float',
		'pax2d_98' => 'float'
	];

	protected $fillable = [
		'id',
		'id_hotel',
		'categoria',
		'sgl',
		'dbl',
		'tpl',
		'qua',
		'sgl2',
		'dbl2',
		'tpl2',
		'qua2',
		'sgl3',
		'dbl3',
		'tpl3',
		'qua3',
		'sgl4',
		'dbl4',
		'tpl4',
		'qua4',
		'sgl5',
		'dbl5',
		'tpl5',
		'qua5',
		'sgl6',
		'dbl6',
		'tpl6',
		'qua6',
		'sgl7',
		'dbl7',
		'tpl7',
		'qua7',
		'sgl8',
		'dbl8',
		'tpl8',
		'qua8',
		'sglm',
		'dblm',
		'tplm',
		'quam',
		'sglm2',
		'dblm2',
		'tplm2',
		'quam2',
		'sglm3',
		'dblm3',
		'tplm3',
		'quam3',
		'sglm4',
		'dblm4',
		'tplm4',
		'quam4',
		'sglm5',
		'dblm5',
		'tplm5',
		'quam5',
		'sglm6',
		'dblm6',
		'tplm6',
		'quam6',
		'sglm7',
		'dblm7',
		'tplm7',
		'quam7',
		'sglm8',
		'dblm8',
		'tplm8',
		'quam8',
		'sgld',
		'dbld',
		'tpld',
		'quad',
		'sgld2',
		'dbld2',
		'tpld2',
		'quad2',
		'sgld3',
		'dbld3',
		'tpld3',
		'quad3',
		'sgld4',
		'dbld4',
		'tpld4',
		'quad4',
		'sgld5',
		'dbld5',
		'tpld5',
		'quad5',
		'sgld6',
		'dbld6',
		'tpld6',
		'quad6',
		'sgld7',
		'dbld7',
		'tpld7',
		'quad7',
		'sgld8',
		'dbld8',
		'tpld8',
		'quad8',
		'chv21',
		'chm21',
		'chd21',
		'chv32',
		'chm32',
		'chd32',
		'chv43',
		'chm43',
		'chd43',
		'chv54',
		'chm54',
		'chd54',
		'chv65',
		'chm65',
		'chd65',
		'chv76',
		'chm76',
		'chd76',
		'chv87',
		'chm87',
		'chd87',
		'chv98',
		'chm98',
		'chd98',
		'costax',
		'netax',
		'comtax',
		'id_ratesvalid',
		'breackfast',
		'fecha_ini',
		'fecha_fin',
		'fdv_adult21',
		'fdv_child21',
		'fdm_adult21',
		'fdm_child21',
		'fdd_adult21',
		'fdd_child21',
		'fdv_adult32',
		'fdv_child32',
		'fdm_adult32',
		'fdm_child32',
		'fdd_adult32',
		'fdd_child32',
		'fdv_adult43',
		'fdv_child43',
		'fdm_adult43',
		'fdm_child43',
		'fdd_adult43',
		'fdd_child43',
		'fdv_adult54',
		'fdv_child54',
		'fdm_adult54',
		'fdm_child54',
		'fdd_adult54',
		'fdd_child54',
		'fdv_adult65',
		'fdv_child65',
		'fdm_adult65',
		'fdm_child65',
		'fdd_adult65',
		'fdd_child65',
		'fdv_adult76',
		'fdv_child76',
		'fdm_adult76',
		'fdm_child76',
		'fdd_adult76',
		'fdd_child76',
		'fdv_adult87',
		'fdv_child87',
		'fdm_adult87',
		'fdm_child87',
		'fdd_adult87',
		'fdd_child87',
		'fdv_adult98',
		'fdv_child98',
		'fdm_adult98',
		'fdm_child98',
		'fdd_adult98',
		'fdd_child98',
		'trip100',
		'trip200',
		'trip300',
		'trip101',
		'trip201',
		'trip301',
		'trip100c',
		'trip200c',
		'trip300c',
		'trip101c',
		'trip201c',
		'trip301c',
		't_in',
		't_out',
		'car_in',
		'car_out',
		'schv',
		'schm',
		'schd',
		'schv2',
		'schm2',
		'schd2',
		'schv3',
		'schm3',
		'schd3',
		'schv4',
		'schm4',
		'schd4',
		'dupli',
		'fecha_schv',
		'fecha_schm',
		'fecha_schv2',
		'fecha_schm2',
		'fecha_schv3',
		'fecha_schm3',
		'fecha_schv4',
		'fecha_schm4',
		'pax1v_21',
		'pax2v_21',
		'pax1m_21',
		'pax2m_21',
		'pax1d_21',
		'pax2d_21',
		'pax1v_32',
		'pax2v_32',
		'pax1m_32',
		'pax2m_32',
		'pax1d_32',
		'pax2d_32',
		'pax1v_43',
		'pax2v_43',
		'pax1m_43',
		'pax2m_43',
		'pax1d_43',
		'pax2d_43',
		'pax1v_54',
		'pax2v_54',
		'pax1m_54',
		'pax2m_54',
		'pax1d_54',
		'pax2d_54',
		'pax1v_65',
		'pax2v_65',
		'pax1m_65',
		'pax2m_65',
		'pax1d_65',
		'pax2d_65',
		'pax1v_76',
		'pax2v_76',
		'pax1m_76',
		'pax2m_76',
		'pax1d_76',
		'pax2d_76',
		'pax1v_87',
		'pax2v_87',
		'pax1m_87',
		'pax2m_87',
		'pax1d_87',
		'pax2d_87',
		'pax1v_98',
		'pax2v_98',
		'pax1m_98',
		'pax2m_98',
		'pax1d_98',
		'pax2d_98'
	];
}
