<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="max-w-7xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-6">My Projects</h1>
        <a href="{{ route('projects.create') }}" class="text-blue-500 hover:underline mb-4 inline-block">Create New
            Project</a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($projects as $project)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="font-semibold text-xl">{{ $project->name }}</h2>
                    <p>{{ $project->description }}</p>

                    <div class="mt-4">
                        <a href="{{ route('projects.show', $project) }}" class="text-green-500 hover:underline">View
                            Project</a>
                        <a href="{{ route('projects.edit', $project) }}" class="ml-4 text-blue-500 hover:underline">Edit
                            Project</a>
                        <form method="POST" action="{{ route('projects.destroy', $project) }}"
                            class="inline-block ml-4">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete Project</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
