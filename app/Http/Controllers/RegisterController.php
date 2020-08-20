<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function register(Request $request) {
    	if($request -> isMethod('post')) {
    		$data = $request -> all();
    		$data = $request -> validate([
    			'username' => 'required|min:6|max:10',
                'password' => 'required|min:6|max:10',
                'nickname' => 'required|min:2|max:15',
                'phonenumber' => 'required|min:8|max:15',
                'email' => 'required|email',
    			]);
    		$end = User::create($data);
    		if($end){
    			echo "<h1><font color='pink'>注册成功了喔！</font></h1>";
    		}

    	}
    	else{
    		return view('register');
    	}
    }
}
