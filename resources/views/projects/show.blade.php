<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-cyan-400 to-blue-500 min-h-screen flex flex-col">

    <div class="max-w-7xl mx-auto p-6">
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h1 class="text-3xl font-bold text-blue-600 mb-4">{{ $project->name }}</h1>
            <p class="text-gray-700 mb-6">{{ $project->description }}</p>

            <div class="flex space-x-4">
                <a href="{{ route('projects.edit', $project) }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                    Edit Project
                </a>
                <form method="POST" action="{{ route('projects.destroy', $project) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                        Delete Project
                    </button>
                </form>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Tasks</h2>
                <a href="{{ route('projects.tasks.create', $project) }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                    + Create Task
                </a>
            </div>

            @if ($project->tasks->isEmpty())
                <p class="text-gray-700">No tasks available for this project.</p>
            @else
                <div class="space-y-4">
                    @foreach ($project->tasks as $task)
                        <div
                            class="bg-gray-50 border border-gray-200 rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow duration-300">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $task->title }}</h3>
                            <p class="text-gray-600">{{ $task->description }}</p>

                            <div class="mt-4 flex space-x-4">
                                <a href="{{ route('tasks.edit', $task) }}"
                                    class="text-blue-500 hover:text-blue-600 font-medium transition duration-300">
                                    Edit Task
                                </a>
                                <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-red-500 hover:text-red-600 font-medium transition duration-300">
                                        Delete Task
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <div class="mt-8 flex justify-center">
        <a href="{{ url()->previous() }}"
            class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-6 rounded-lg shadow-md transition duration-300">
            Back to Previous Page
        </a>
    </div>
    </div>


</body>

</html>
