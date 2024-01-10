<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hotele
 * 
 * @property int $id
 * @property string|null $codigo
 * @property string|null $categoria
 * @property string|null $nombre
 * @property string|null $address
 * @property string|null $city
 * @property string|null $zipcode
 * @property string|null $contacname
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $webpage
 * @property int|null $breakfast
 * @property int|null $resoftfe
 * @property string|null $latitud
 * @property string|null $longitud
 * @property float|null $tax
 * @property float|null $stoproft
 * @property float|null $maximo
 * @property string|null $description
 * @property string|null $image1
 * @property string|null $image2
 * @property string|null $image3
 * @property string|null $image4
 * @property bool $estado
 * @property bool $super_breakfast
 * @property int $orden
 * @property int|null $type_web
 *
 * @package App\Models
 */
class Hotele extends Model
{
	protected $table = 'hoteles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'breakfast' => 'int',
		'resoftfe' => 'int',
		'tax' => 'float',
		'stoproft' => 'float',
		'maximo' => 'float',
		'estado' => 'bool',
		'super_breakfast' => 'bool',
		'orden' => 'int',
		'type_web' => 'int'
	];

	protected $fillable = [
		'id',
		'codigo',
		'categoria',
		'nombre',
		'address',
		'city',
		'zipcode',
		'contacname',
		'phone',
		'email',
		'webpage',
		'breakfast',
		'resoftfe',
		'latitud',
		'longitud',
		'tax',
		'stoproft',
		'maximo',
		'description',
		'image1',
		'image2',
		'image3',
		'image4',
		'estado',
		'super_breakfast',
		'orden',
		'type_web'
	];
}
