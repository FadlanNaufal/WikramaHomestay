<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticableContract;


class Pelanggan extends Model implements AuthenticableContract
{
	use Authenticatable;

	protected $fillable = ['name','password','email','alamat'];
    //
}
