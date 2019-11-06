<?php
	//get current user'id that is loged in
	if (!function_exists('_user_id'))
	{
		function _user_id(){
			return auth()->guard('web')->user()->id;
		}
	}
    //Upload Multiple Files
    if (!function_exists('_Multi_Upload'))
    {
    	function _Multi_Upload($data = [],$relation_id)
	    {
	       foreach($data['attachments'] as $file) {
	            $newFileName = date('d-m-Y_H-i-s').'_'.rand().'.'.$file->getClientOriginalExtension();
	            $StoreFile          = \App\Attachment::create([
	                'name'          =>$newFileName,
	                'size'          =>$file->getSize(),
	                'file'          =>$file,
	                'path'          =>$data['path'],
	                'full_file'     =>public_path().$data['path'].$newFileName,
	                'mime_type'     =>$file->getMimeType(),
	                'file_type'     =>$file->getClientOriginalExtension(),
	                "$relation_id"  =>$data['id']
	            ]);
	            if($StoreFile) {
	                $file->move(public_path().$data['path'],$newFileName);
	            }
	        }
	    }
    }
