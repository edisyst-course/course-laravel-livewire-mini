<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Dropdowns
    public function dropdowns()
    {
        return view('projects.dropdown');
    }
    public function postDropdowns(Request $request)
    {
        return $request->all();
    }


    // Parentchildren
    public function parentchildren()
    {
        return view('projects.parentchildren');
    }
    public function postParentchildren(Request $request)
    {
        return $request->all();
    }


    // Editmodal
    public function editmodal()
    {
        return view('projects.editmodal');
    }


    // Autorefresh
    public function autorefresh()
    {
        return view('projects.autorefresh');
    }


    // Slug
    public function slug()
    {
        return view('projects.slug');
    }
}
