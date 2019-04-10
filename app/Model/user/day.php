<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class day extends Model
{
    public function tutorrequests(){
    	return $this->hasMany('App\Model\user\tutorrequest');
    }
}
