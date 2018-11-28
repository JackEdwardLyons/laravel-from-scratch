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

    public function store(Project $project)
    {
        $validated_fields = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);

        $project::create($validated_fields);
        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
