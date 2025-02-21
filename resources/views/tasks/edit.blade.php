<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-cyan-400 to-blue-500 min-h-screen flex items-center justify-center">

    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-8">
        <h1 class="text-3xl font-bold text-blue-600 mb-6 text-center">Edit Task</h1>

        <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Task Title</label>
                <input type="text" name="title" id="title" value="{{ $task->title }}"
                    placeholder="Enter task title"
                    class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    required>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Task Description</label>
                <textarea name="description" id="description" rows="4" placeholder="Enter task description"
                    class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    required>{{ $task->description }}</textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-6 rounded-lg transition duration-300">
                    Update Task
                </button>
            </div>
        </form>

        <div class="mt-[60px] flex justify-center">
            <a href="{{ url()->previous() }}"
                class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-6 rounded-lg shadow-md transition duration-300">
                Back to Previous Page
            </a>
        </div>
    </div>

</body>

</html>
