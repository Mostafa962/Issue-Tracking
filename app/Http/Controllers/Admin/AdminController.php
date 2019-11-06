<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //|--------------------------Auth----------------------------------
	//return to login as admin page
	public function login(){
		if (Auth::guard('admin')->check()) {
			return back();
		}
		return view('Issue_Tracking.auth.admins.login');
	}
	//check if account exist
	public function isLogined(Request $request){
		$remember = $request->rememberme == 1 ? true: false;
		if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$remember)){
			return redirect('admin');
		}else{
			session()->flash('error','Email and password does\'nt matches,try again.');
			return redirect('admin/login');
		}
	}
	//logout 
	public function logout(){
			auth()->guard('admin')->logout();
			return redirect('admin/login');
	}
    //|------------------------------------------------------------
}
