<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $table = 'table_kamar';
    protected $fillable =[
    	'nomor_kamar',
    	'nama_kamar',
    	'kapasitas_kamar',
    	'kelas_kamar',
    	'harga',
        'nama_fitur',
    	'file_gambar',
    	'keterangan',
    ];

    public function status(){
        return $this->hasOne('App\Transaksi','status_id','id');
    }

    public function transaksi()
    {
        return $this->hasOne('App\Transaksi','id','id');
    }
}
