<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{	
	public function index()
	{
		$users = User::all();
	    return Datatables::of($users)->make(true);
	}
	public function view()
	{
		return view('Issue_Tracking._admins._users.view');
	}
	//show page that craete new user
	public function create()
	{
		return view('Issue_Tracking._admins._users.create');
	}
	//save new user data
	public function store(Request $req)
	{
		$user_data  	= [
			'name'		=> $req->name,
			'email' 	=> $req->email,
			'password'  => bcrypt($req->password),
		];
		$saved = User::create($user_data);
		if($saved)
		{
          return response()->json(['status' => 'success']);
      	}
      	else
      	{
          return response()->json(['status' => 'error']);
      	}
	}
	//show edit user form
	public function edit($id)
	{
		$user = User::find($id);
		return view('Issue_Tracking._admins._users.edit',compact('user'));
	}
	//save updated user data
	public function update(Request $req)
	{
		$user = User::find($req->id);
        //if pssword added in update or not
        if($req->password) {
            $password = bcrypt($req->password);
        }else{
            $password = $user->password;
        }
       $form_data     = array(
        'name'        => $req->name,
        'email'       => $req->email,
        'password'    => $password,
        );
        $saved = User::where('id',$req->id)->update($form_data);
        if($saved){
            return response()->json(['success' => 'Data is successfully updated']);
        }
	}
	//delete user data
	public function delete(Request $req)
	{
		$model     = new User;
        $user      = $model::find($req->id);
        $user->delete();
        return response()->json(['success' => 'Data is successfully deleted']);
	}
	//Check if entered new user with already existing email
    public function checkEmail(Request $req)
    {
        $email      = $req->input('email');
        $isExists   = User::where('email',$email)->first();
        if($isExists)
        {
            return response()->json(array("exists" => true));
        }else{
            return response()->json(array("exists" => false));
        }
    }
}
