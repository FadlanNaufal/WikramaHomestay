<?php

namespace App;
use App\Pelanggan;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
    	'user_id',
    	'nama_pemesan',
    	'kamar_id',
    	'total_harga',
    	'hari',


    ];


    public function Kamar(){
    	return $this->belongsTo('App\kamar','kamar_id','id');
    }

    public function pelanggan(){
        return $this->hasOne('App\Pelanggan','id','user_id');
    }

     public function setPending()
    {
        $this->attributes['status'] = 'pending';
        self::save();
    }
 
    /**
     * Set status to Success
     *
     * @return void
     */
    public function setSuccess()
    {
        $this->attributes['status'] = 'success';
        self::save();
    }
 
    /**
     * Set status to Failed
     *
     * @return void
     */
    public function setFailed()
    {
        $this->attributes['status'] = 'failed';
        self::save();
    }
 
    /**
     * Set status to Expired
     *
     * @return void
     */
    public function setExpired()
    {
        $this->attributes['status'] = 'expired';
        self::save();
    }
}
