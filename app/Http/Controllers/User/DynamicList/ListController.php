<?php

namespace App\Http\Controllers\User\DynamicList;

use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DynamicList;
class ListController extends Controller
{
	//Show Dynamic Lists in Datatable
	public function index()
	{
		$lists = DynamicList::all();
	    return Datatables::of($lists)->make(true);
	}
	//show content of dynamic lists
	public function view()
	{
		return view('Issue_Tracking._lists.index');
	}
	//Store Issuse data
    public function store(Request $req)
    {
    	$list_data  			= [
			'name'				=> $req->name,
		];
		$saved = DynamicList::create($list_data);
		if($saved)
		{
          return response()->json(['status' => 'success','saved'=>'list_added']);
      	}
      	else
      	{
          return response()->json(['status' => 'error']);
      	}
    }
   //delete List
	public function delete(Request $req)
	{
		$model     = new DynamicList;
        $list      = $model::find($req->id);
        $list->delete();
        return response()->json(['success' => 'Data is successfully deleted']);
	}
}
