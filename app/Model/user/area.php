<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
	protected $table = 'areas';

    public function district(){
    	return $this->belongsTo('App\Model\user\district');
    }
}
