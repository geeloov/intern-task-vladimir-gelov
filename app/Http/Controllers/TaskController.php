<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  
    public function create(Project $project)
    {
        return view('tasks.create', compact('project'));
    }


    public function store(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
        ]);

        $task = $project->tasks()->create($request->only(['title', 'description', 'due_date']));

        return redirect()->route('projects.show', $project); 
    }


    public function edit(Project $project, Task $task)
    {
        return view('tasks.edit', compact('project', 'task'));
    }


    public function update(Request $request, Project $project, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
        ]);

        $task->update($request->only(['title', 'description', 'due_date']));

        return redirect()->route('projects.show', ['project' => $task->project_id]);
    }

    public function destroy(Project $project, Task $task)
    {
        $task->delete();

        return redirect()->route('projects.show', $task->project_id);
    }
}
