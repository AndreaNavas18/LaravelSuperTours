<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class NewCliente extends Authenticatable 
{
	use Notifiable, HasFactory;

	public $table = 'new_clientes';

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
		'is_encrypted',
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

	public function validateCredentials($user, array $credentials)
    {
        $plain = $credentials['password'];

        if (!$user->is_encrypted) {
            if ($plain === $user->password) {
                $user->password = Hash::make($plain);
                $user->is_encrypted = true;
                $user->save();

                return true;
            }
        }

        // Usar la comparación estándar de Laravel para contraseñas encriptadas
        return Hash::check($plain, $user->password);
    }

	
}
