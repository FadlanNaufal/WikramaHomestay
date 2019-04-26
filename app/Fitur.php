<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    protected $fillable = [
    	'nama_fitur',
    	'file_fitur',
    	'jenis_fitur'
    ];
}
