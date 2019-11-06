<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicList extends Model
{
    protected $table = 'dynamic_lists';
    protected $fillable = [
            'name', 
            'counter'
        ]; 
    
    //get TODO list name
    public function TODOList(){
    	return $this->Where('id',3)->first();	
    }
    //get IN PROGRESS list name
    public function InPreogressList(){
    	return $this->Where('id',2)->first();	
    }
    //get DONE list name
    public function DoneList(){
    	return $this->Where('id',1)->first();	
    }
    //return all issues belongs to an issue
    public function issues(){
         return $this->hasMany('App\Issue');
    }
}
