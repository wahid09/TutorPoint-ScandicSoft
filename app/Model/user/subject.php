<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    public function tutorrequests(){
    	return $this->hasMany('App\Model\user\tutorrequest');
    }
}
