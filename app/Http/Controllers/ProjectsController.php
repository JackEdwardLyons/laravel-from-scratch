<?php

namespace App\Http\Controllers;

use App\Project; // use the Project model

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');

        $project->save();
        
        return redirect('/projects');
    }

    public function edit($id) // example.com/projects/{project}/edit
    {
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update($id)
    {
        $project = Project::find($id);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');

    }

    public function destroy($id)
    {
        $project = Project::find($id)->delete();

        return redirect('/projects');
    }

    public function show()
    {
        //
    }
}
