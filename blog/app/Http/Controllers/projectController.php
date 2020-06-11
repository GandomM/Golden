<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Image;
use Illuminate\Support\Facades\Session;
class projectController extends Controller
{

     //  Add new project
   function project_add()
   {
    	return view('Admin_pages/project_add');
    }




     //  Insert new project
    function project_insert(request $request)
    {
          $data = [
            'project_name' => $request->project_name,
            'owner' => $request->owner,
            'type' => $request->type,
            'design' => $request->design,
            'color' => $request->color,
            'technis' => $request->technis,
            'matrial' => $request->matrial,
            'location' => $request->location,
            'city' => $request->city,
            'detail' => $request->detail,
            'date' => $request->date,
        ];
        $project=Project::create($data);

      //  check if request has image
        $image = $request->hasFile('image') ? $request->file('image') : null;

        if ($image) {
            $image_name =time();
            $image->move(public_path().'/producs_image',$image_name);
            Image::create([
                'image_name'=>$image_name,'imagable_id'=>$project->id,'imagable_type'=>get_class($project)
            ]);
        }
        return redirect('project_list');
    }



     //  show projects
    function project_list()
    {
        // products variable is optional name
        $projects = Project::get();

        return view('Admin_pages/project_list', compact('projects'));
    	// products parameter in compate method should carry an array of info to product list and we will take it on that page
    }




     //  Delete a project
     function project_delete($id)
     {
        $project = Project::find($id);
        $project->delete();

        Session::flash('success', "project deleted!");
        return redirect('project_list');
    }




     //  Edit a project
    function project_edit($id)
    {
        $project = Project::find($id);
        return view('Admin_pages/project_edit', compact('project'));
    }





     //  Update a Project
    function project_update(Request $request, $id)
    {
       
    $project = Project::find($id);
    $imageEdit = Image::find($id);

    $project->project_name = $request->project_name;
    $project->owner = $request->owner;
    $project->type = $request->type;
    $project->design = $request->design;
    $project->color = $request->color;
    $project->technis = $request->technis;
    $project->matrial = $request->matrial;
    $project->location = $request->location;
    $project->city = $request->city;
    $project->detail = $request->detail;
    $project->date = $request->date;

    $imageEdit->image = $image_name ;
    
    $project->save();
    Session::flash('success',"project updated");
    return redirect('project_list');
}
}
