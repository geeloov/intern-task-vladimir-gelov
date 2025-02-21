<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-cyan-400 to-blue-500 min-h-screen flex items-center justify-center">

    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-8">
        <h1 class="text-3xl font-bold text-blue-600 mb-6 text-center">Edit Project</h1>

        <form action="{{ route('projects.update', $project) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Project Name</label>
                <input type="text" name="name" id="name" value="{{ $project->name }}" required
                    class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Enter project name">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Project Description</label>
                <textarea name="description" id="description" rows="4" required
                    class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Enter project description">{{ $project->description }}</textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-6 rounded-lg transition duration-300">
                    Update Project
                </button>
            </div>
        </form>
    </div>

</body>

</html>
