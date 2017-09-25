<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entry extends Model
{
    //
    protected $fillable=['naskah','jenis_id','ukuran','ketinggian','lokasi','sudutpandang_id','fungsijalan_id','fungsiruang_id','jumlah_muka','harga_dasar_strategis','masa_izin','cara_pemasangan'];
    protected $visible=['naskah','jenis_id','ukuran','ketinggian','lokasi','sudutpandang_id','fungsijalan_id','fungsiruang_id','jumlah_muka','harga_dasar_strategis','masa_izin','cara_pemasangan'];
    public $timestamps=true;

    public function jenis()
    {
    	return $this->belongsTo('App\Reklame', 'jenis_id');
    }

    public function sudut()
    {
    	return $this->belongsTo('App\sudutpandang', 'sudutpandang_id');
    }

    public function jalan()
    {
    	return $this->belongsTo('App\fungsijalan', 'fungsijalan_id');
    }

    public function ruang()
    {
    	return $this->belongsTo('App\fungsiruang', 'fungsiruang_id');
    }
}
