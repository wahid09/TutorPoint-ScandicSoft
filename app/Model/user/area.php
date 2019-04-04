<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    public function district(){
    	return $this->belongsTo('App\district');
    }
}
