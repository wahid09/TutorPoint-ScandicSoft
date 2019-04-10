<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    public function tutorrequests(){
    	return $this->hasMany('App\Model\user\tutorrequest');
    }
}
