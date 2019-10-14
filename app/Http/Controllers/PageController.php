<?php

namespace App\Http\Controllers;

use App\Project;
use App\Technology;
use App\TechnologyCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PageController extends Controller
{
	public function index()
	{
        $title = 'Portfolio - Piotr Rogalski';
        $projects = Project::orderBy('created_at', 'desc')->paginate(4);
        
        return view('index', compact('title', 'projects'));
	}
/*
	public function showProject()
	{
		return view('pages.showProject');		
	}*/

	public function about()
	{
	    $title = 'O mnie';
        $technologyGroups = TechnologyCategory::with('technologies')->get();

        return view('pages.about', compact('title', 'technologyGroups'));
	}
	
}
