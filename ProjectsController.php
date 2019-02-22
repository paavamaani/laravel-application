<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function courses () {

    	$project = new \App\project;
    	$list = $project::all();

    	return view('Pages.courses',compact('list'));

    }


    
}
