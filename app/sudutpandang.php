<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sudutpandang extends Model
{
    //
    protected $fillable=['arah','skor'];
    protected$visible=['arah','skor'];
    public $timestamps = true;

    public function entry()
    {
    	return $this->hasMany('App\entry', 'sudutpandang_id');
    }
}
