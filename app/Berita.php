<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
    	'judul_berita',
    	'file_berita',
    	'isi_berita',
    ];
}
