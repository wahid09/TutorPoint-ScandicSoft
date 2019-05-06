<?php

namespace App\Http\Controllers;

use App\Model\user\User;
use Illuminate\Http\Request;


class verifyController extends Controller
{
    public function verify($token){
    	User::where('token', $token)->firstOrFail()->update(['token' => null]);

    	return redirect()
    	       ->route('home')
    	       ->with('success', 'Account verified successfully');
    }
}
