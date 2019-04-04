<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    protected $table = 'districts';

    public function area(){
    	return $this->hasMany('App\area');
    }
}
