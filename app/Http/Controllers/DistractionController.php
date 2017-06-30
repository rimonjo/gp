<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Response;
use Session;
use App\Distaraction;
class DistractionController extends Controller
{
    //
    public function index()
   {
       return view('index');
   }

    public function multiple_upload(Request $request){
       //getting all of the post data
       $files =Input::file('images');

       //Making counting of uploaded images
       $file_count =count($files);
       // start count how many uploaded
       $uploadcount=0;

       foreach ($files as $file){
           $rules=array('file' => 'required');
           $validator =Validator::make(array('file' => $file),$rules);
           if($validator->passes()){
               $destinationPath = 'images/trips_distractions_images/'.$request->trip_id; //upload folder in public directory
               echo $destinationPath;
               mkdir($destinationPath , 0777, true);

               $filename = $file->getClientOriginalName();
               $extension = $file->getClientOriginalExtension();
               $filename = $file->getFilename().'.'.$extension;
               $upload_success = $file->move($destinationPath,$filename);

               $uploadcount ++;

               // save into database
               $entry = new Distaraction();
               $entry->mime = $file->getClientMimeType();
               $entry->original_filename = $filename;
               $entry->filename = $file->getFilename().'.'.$extension;

               $entry->time = $file->time;
               $entry->date = $file->date;
               $entry->image_path = $destinationPath.$filename;
               $entry->status = $file->status;

               $entry->driver_id = $file->driver_id;
               $entry->trip_id = $file->trip_id;
               $entry->save();
           }
       }
       if($uploadcount == $file_count){
           Session::flash('success','Upload successfully');
           return Redirect::to('upload');
       } else {
           return Redirect::to('upload')->withInput()->withErrors($validator);
       }

   }
}
