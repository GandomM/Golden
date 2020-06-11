<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use Illuminate\Support\Facades\Session;
class partnerController extends Controller
{
    //  Add new partner company
     function partner_add()
     {
    	return view('Admin_pages/partner_add');
    }




    //  Insert new partner company
    function partner_insert(request $request)
    {
       
    // // partner is an object form partner Model
         $partner = new Partner;

         $image_name = $request->logo->getClientOriginalName();
         $request->logo->move('partners_logo', $image_name);
         $image_path = 'partners_logo/'.$image_name;

         $partner->name = $request->name;
         $partner->logo = $image_path;
         $partner->save();
         return redirect('partner_list');
    }




    //  show partner companies
    function partner_list()
    {
        // partners variable is optional name
        $partners = Partner::get();

        return view('Admin_pages/partner_list', compact('partners'));
    	// partners parameter in compate method should carry an array of info to partner list and we will take it on that page
    }




    //  Delete a partner company
     function partner_delete($id)
     {
        $partner = Partner::find($id);
        $partner->delete();
        Session::flash('success', "partner deleted!");
        return redirect('partner_list');
    }




    //  Edit a partner company
    function partner_edit($id)
    {
        $partner = Partner::find($id);
        return view('Admin_pages/partner_edit', compact('partner'));
    }



    //  update a partner company
    function partner_update(Request $request, $id)
    {      
    $partner = Partner::find($id);
    $partner->name = $request->name;
    $partner->logo = $image_path;
    $partner->save();
    Session::flash('success',"partner updated");
    return redirect('partner_list');
}   
}
