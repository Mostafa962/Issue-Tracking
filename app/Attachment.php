<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = 'attachments';
    protected $fillable = [
        'name',
        'size', 
        'file',
        'path',
        'full_file',
        'mime_type',
        'file_type',
        'issue_id',
        
    ];   
}
