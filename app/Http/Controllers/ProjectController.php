<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function project($project)
    {
        if (view()->exists('projects.' . $project)) {
            return view('projects.' . $project);
        }
        else
        {
            return abort(404);
        }
    }
}
