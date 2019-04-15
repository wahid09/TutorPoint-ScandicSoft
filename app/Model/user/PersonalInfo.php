<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    public function user(){
    	return $this->belongsTo('User');
    }
}
