<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    protected $table = 'districts';

    public function areas(){
    	return $this->hasMany('App\Model\user\area');
    }
}
