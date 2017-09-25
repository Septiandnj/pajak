<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fungsijalan extends Model
{
    //
    protected $fillable=['jalan','skor'];
    protected $visible=['jalan','skor'];
    public $timestamps=true;

    public function entry()
    {
    	return $this->hasMany('App\entry', 'fungsijalan_id');
    }
}
