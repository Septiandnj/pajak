<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reklame extends Model
{
    //
    protected $fillable=['name','dasar1','dasar2','dasar3','ket'];
    protected $visible=['name','dasar1','dasar2','dasar3','ket'];
    public $timestamps=true;

    public function entry()
    {
    	return $this->hasMany('App\entry', 'jenis_id');
    }
}
