<?php

namespace App\Model\user;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class tutorrequest extends Model
{
	protected $table = 'tutorrequests';

    public function district(){
    	return $this->belongsTo('App\Model\user\district');
    }
    public function class(){
    	return $this->belongsTo('App\Model\user\studentclass');
    }
    public function subject(){
    	return $this->belongsTo('App\Model\user\subject');
    }
    public function day(){
    	return $this->belongsTo('App\Model\user\day');
    }
    public function salary(){
    	return $this->belongsTo('App\Model\user\salary');
    }
    public function getFromDateAttribute($value) {
    return \Carbon\Carbon::parse($value)->format('d-m-Y');
}
}
