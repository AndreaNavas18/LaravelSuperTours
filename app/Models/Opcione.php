<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Opcione
 * 
 * @property float $codigo
 * @property string $menuitem_es
 * @property string $menuitem_en
 * @property string $depende
 * @property string $submenu
 * @property string $url
 * @property string $quicklink
 *
 * @package App\Models
 */
class Opcione extends Model
{
	protected $table = 'opciones';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'float'
	];

	protected $fillable = [
		'codigo',
		'menuitem_es',
		'menuitem_en',
		'depende',
		'submenu',
		'url',
		'quicklink'
	];
}
