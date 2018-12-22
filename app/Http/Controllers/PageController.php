<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function index(){
		$title = 'Piotr Rogalski!';
		return view('index', compact('title'));
	}

	public function showProject(Request $title){
		return view('pages.showProject', compact('title'));		
	}

	public function about(){
	    $title = 'O mnie';
		return view('pages.about', compact('title'));	    
	 }

}