<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fungsiruang extends Model
{
    //
    protected $fillable=['kawasan','skor'];
    protected $visible=['kawasan','skor'];
    public $timestamps=true;

    public function entry()
    {
    	return $this->hasMany('App\entry', 'fungsiruang_id');
    }
}
