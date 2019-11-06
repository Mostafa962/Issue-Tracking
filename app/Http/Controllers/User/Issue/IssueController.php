<?php

namespace App\Http\Controllers\User\Issue;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\DynamicList;
use App\User;
use App\Issue;
use Upload;
class IssueController extends Controller
{
	//view tasks page
    public function view()
    {
    	$users            = User::pluck('name','id');
      $lists            = DynamicList::pluck('name','id');
    	$TODOList 	      = DynamicList::Where('id',1)->first();
      $InPreogressList  = DynamicList::Where('id',2)->first();
      $DoneList         = DynamicList::Where('id',3)->first();
      $OntherLists      = DynamicList::WhereNotBetween('id',[1,3])->get();
      $TODOIssus        = Issue::Where('dynamic_list_id',1)->get();
      $InPreogressIssus = Issue::Where('dynamic_list_id',2)->get();
      $DoneIssus        = Issue::Where('dynamic_list_id',3)->get();
    	return view('Issue_Tracking._issues.index',compact('users','lists','DefaultLists','OntherLists','TODOList','InPreogressList','DoneList','TODOIssus','InPreogressIssus','DoneIssus'));
    }
    //Store Issuse data
    public function store(Request $req)
    {
      //validate title and description
      Validator::make($req->all(), [
         'title'        =>'required',
         'description'  =>'required',
         ])->validate();
      //Store data
      $issue_data  			 = [
  			'title'				   => $req->title,
  			'description' 	 => $req->description,
  			'due_date'  		 => $req->due_date,
  			'comments'  		 => $req->comments,
        'user_id'        => _user_id(), //_user_id is a helper function that get current loged in user
  			'dynamic_list_id'=> 1, //by default ISSUE added to TODO list that it's id is 1
  		];
  		$saved = Issue::create($issue_data);
      //upload Issue attachments
      if (isset($req->attachments) && count($req->attachments))
      {
            $files            = $req->file('attachments');
            $attachments      = [
                  'files'     =>$files,
                  'id'        =>$saved->id,
                  'path'      => '\Issues-Files\\'];
            $req->attachments = Upload::MultiUpload($attachments,'issue_id');
      }
      if($saved)
      {
        //update TODO list counter
        $todoList = DynamicList::where('id',1)->first();
        DynamicList::where('id',1)->update(['counter'=>$todoList->counter+1]);
        return response()->json(
          [
            'status' => 'success',
            'saved'   => 'issue_added',
            'list_id' => $saved->id
          ]);
    	}
    	else
    	{
        return response()->json(['status' => 'error']);
    	}
    }

    public function update(Request $req)
    {
      //validate title and description
      Validator::make($req->all(), [
         'title'        =>'required',
         'description'  =>'required',
         ])->validate();
      //Store data
      $issue_data        = [
        'title'          => $req->title,
        'description'    => $req->description,
        'due_date'       => $req->due_date,
        'comments'       => $req->comments,
        'user_id'        => $req->user_id,
        'dynamic_list_id'=> $req->list_id,
      ];
      $updated  = Issue::where('id',$req->id)->update($issue_data);
      //upload Issue attachments
      if (isset($req->attachments) && count($req->attachments))
      {
            $files            = $req->file('attachments');
            $attachments      = [
                  'files'     =>$files,
                  'id'        =>$saved->id,
                  'path'      => '\Issues-Files\\'];
            $req->attachments = Upload::MultiUpload($attachments,'issue_id');
      }
      if($updated)
      {
        return response()->json(['success' => 'Data is successfully updated']);
      }
      else
      {
        return response()->json(['status' => 'error']);
      }
    }
}
