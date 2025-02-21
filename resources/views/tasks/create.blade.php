<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-cyan-400 to-blue-500 min-h-screen flex items-center justify-center">

    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-8">
        <h1 class="text-3xl font-bold text-blue-600 mb-6 text-center">Create a New Task</h1>

        <form action="{{ route('projects.tasks.store', $project) }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Task Title</label>
                <input type="text" name="title" id="title" placeholder="Enter task title"
                    class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Task Description</label>
                <textarea name="description" id="description" placeholder="Enter task description"
                    class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    rows="4" required></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-6 rounded-lg transition duration-300">
                    Create Task
                </button>
            </div>
        </form>
    </div>

</body>

</html>
