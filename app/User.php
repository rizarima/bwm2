<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
	protected $fillable = ['name', 'email', 'password'];
	protected $hidden = ['password', 'remember_token'];

	// public function scopeSuperAdmin($query)
	// {
	// 	return $query->where('id',auth()->user()->id)->where('roles','super admin');
	// }

	// public function scopeAdmin($query)
	// {
	// 	return $query->where('id',auth()->user()->id)->where('roles','admin');
	// }

	// public function scopeUser($query)
	// {
	// 	return $query->where('id',auth()->user()->id)->where('roles','user');
	// }
}
