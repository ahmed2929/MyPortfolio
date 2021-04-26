<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    public function getProjects(){
        $projects=Project::all();
        return (view('projects',compact('projects')));

    }
}
