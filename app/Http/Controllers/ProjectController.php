<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        
        $project->load('technologies');
        $title = 'Podgląd projektu';
        return view('pages.showProject', compact('project','title'));
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function showPhoto(Project $id)
    {
        if (!is_null($project->images_url)){ 
          $links = explode(',',$project->images_url);
          $url = 'images/'.$links[$id];
        }else{
          $url = 'images/noimage.jpg';
        }
        echo $url;
    }

}
