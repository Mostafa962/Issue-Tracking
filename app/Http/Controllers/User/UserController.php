<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   //|--------------------------Auth----------------------------------
	//return to login as admin page
	public function login(){
		if (Auth::guard('web')->check()) {
			return back();
		}
		return view('Issue_Tracking.auth.users.login');
	}
	//check if account exist
	public function isLogined(Request $request){
		$remember = $request->rememberme == 1 ? true: false;
		if(Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password],$remember)){
			return redirect('/');
		}else{
			session()->flash('error','Email and password does\'nt matches,try again.');
			return redirect('login');
		}
	}
	//logout 
	public function logout(){
			auth()->guard('web')->logout();
			return redirect('login');
	}
    //|------------------------------------------------------------
}
