<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
	protected $table = 'issues';
    protected $fillable = [
        'title', 
        'description',
        'due_date',
        'comments',
        'user_id',
        'dynamic_list_id'
    ];    
    //return all attachments belongs to an issue
    public function attachments(){
         return $this->hasMany('App\Attachment','issue_id');
    }
}
