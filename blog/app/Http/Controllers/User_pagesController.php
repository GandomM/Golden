<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Project;

class User_pagesController extends Controller
{
   function show_index(){
        return view('pages/index');
    }
    function show_about(){
        return view('pages/about');
    }



    function show_projects(){
      

        $project_company = DB::table('projects')
        ->where('type','کمپنی')
        ->get(); 

        $project_homes = DB::table('projects')
        ->where('type','ساختمان رهایشی')
        ->get();

        // $top_projects = DB::table('projects')
       $top_projects1 = DB::table('projects')->take(2)->get();
       $top_projects2 = DB::table('projects')->skip(2)->take(2)->get();
        return view('pages/projects',[
            'project_company'=>$project_company,
            'project_homes'=>$project_homes,
            'top_projects1'=>$top_projects1,
            'top_projects2'=>$top_projects2
        ]);
    }



     function show_contact(){
        return view('pages/contact');
    }




    function show_partners(){

        $partners_first_4 = DB::table('partners')->take(4)->get();
        $partners_second_4 = DB::table('partners')->skip(4)->take(5)->get();
        return view('pages/partners',[
            'partners_first_4'=>$partners_first_4,
            'partners_second_4'=>$partners_second_4
        ]);
    }



     function show_product(){
        $products = DB::table('products')->get();

        return view('pages/product')->with('products',$products);
    }


    function show_product_detail($id,$product_name){
          
       
         $product_details = DB::table('products')
        ->where('id',$id)
        ->get();

       
        return view('pages/product_detail',compact('product_details'));
    }

    function show_project_detail($id,$project_name){
        
         $project_details = DB::table('projects')
        ->where('id',$id)
        ->get()->first();

        return view('pages/project_detail',compact('project_details'));
            }
  
}
