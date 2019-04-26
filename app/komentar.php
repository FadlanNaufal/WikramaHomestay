<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $table = 'komentars';
    protected $fillable = ['nama','komentar'];
}
