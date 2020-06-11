<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
class ImageUploadController extends Controller
{
	function fileCreate(){
		return view('imageupload');
	}
    function fileStore(Request $request){
    	if($request->hasfile('image_name')){

    		$image_array = $request->file('image_name');
    		// $array_len = count($image_array);
    		for($i=0; $i<4; $i++){

         $image_name = $image_array[$i]->getClientOriginalName();
         $image_path = 'projects_image/'.$image_name;
			// $project->type = $request->type;
         $image_array[$i]->move('projects_image', $image_name);
         $uploadImage= new Image;

         $uploadImage->image_name = $image_path;
         

          $uploadImage->type = $request->type;
          $uploadImage->save();

          dd($request->all());
         // $request->image->move('projects_image', $image_name);
         // $image_path = 'projects_image/'.$image_name;
    		}
    		return redirect()->back()->with('msg','all uploaded');
    	}
    	else{
    		return back()->with('msg','please chooose');
    	}
    }
}
