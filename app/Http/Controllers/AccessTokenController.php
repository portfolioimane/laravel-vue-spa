<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AccessTokenController extends Controller
{
    public function show(){
    	return view('settings.token.show');
    }
    public function update(){
    	$user=User::wherename('Mrs. Lillie Carter I')->first();
    	$user->forceFill([
    		'api_token'=>$token =str_random(60)
    	])->save();
    	return back()->with('message', 'token generated ' . $token);
    }
}
