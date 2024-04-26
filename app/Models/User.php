<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
{
	use Notifiable, HasFactory;

	public $table = 'users';

	protected $fillable = [
		'id',
		'email',
		'firstname',
		'lastname',
		'password',
		'phone',
		'celphone',
		'city',
		'state',
		'country',
		'address',
		'zip',
		'tipo_client',
		'birthday',
		'fecha_r',
		'points',
		'email_verified_at',
		'remember_token',
		'left_points',
		'paid_points',
		'role',
	];

	protected $hidden = [
		'password',
		'remember_token',
	];

	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function setRole($role){
		$this->role = $role;
		$this->save();
	}

	
}
