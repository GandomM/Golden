<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_pagesController extends Controller
{
	// show Admin page
	  function show_mainPage(){
        return view('Admin_pages/mainPage');
    }

}
