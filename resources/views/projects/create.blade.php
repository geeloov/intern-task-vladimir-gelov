<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-cyan-400 to-blue-500 min-h-screen flex items-center justify-center">

    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-8">
        <h1 class="text-3xl font-bold text-blue-600 mb-6 text-center">Create a New Project</h1>

        <form action="{{ route('projects.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Project Name</label>
                <input type="text" name="name" id="name" placeholder="Enter project name"
                    class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    required>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Project Description</label>
                <textarea name="description" id="description" placeholder="Enter project description" rows="4"
                    class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    required></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-6 rounded-lg transition duration-300">
                    Create Project
                </button>
            </div>
        </form>
    </div>

</body>

</html>
