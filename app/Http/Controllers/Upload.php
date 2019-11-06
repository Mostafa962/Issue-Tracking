<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Attachment;
class Upload extends Controller
{
    //Upload Multiple Files
    public static function MultiUpload($data = [],$relation_id)
    {
       foreach($data['files'] as $file) {
            $newFileName = date('d-m-Y_H-i-s').'_'.rand().'.'.$file->getClientOriginalExtension();
            $StoreFile          = Attachment::create([
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
    //Delete Multiple files
   public static function DeleteFiles($files,$path){
        foreach($files as $file) {
             unlink(public_path().$path.$file['name']);
         }
         return 1;
    }
    //Upload Single Files
    public static function SingleUpload($path,$file){
        $newFileName = date('d-m-Y_H-i-s').'.'.$file->getClientOriginalExtension();
        $file->move(public_path().$path,$newFileName);
          return $newFileName;
    }
    //Delete Single Files
    public static function DeleteFile($name,$path){
        return unlink(public_path().'/'.$path.'/'.$name);
    }   
}

