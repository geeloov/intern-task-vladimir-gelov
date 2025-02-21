<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-cyan-400 to-blue-500 min-h-screen flex flex-col">

    <header class="bg-transparent">
        <div class="max-w-7xl mx-auto flex items-center justify-between p-6">
            <h1 class="text-3xl font-bold text-blue-600">Projects</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                    Log Out
                </button>
            </form>
        </div>
    </header>

    <main class="flex-grow">
        <div class="max-w-7xl mx-auto p-6">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-4xl font-extrabold text-white">My Projects</h2>
                <a href="{{ route('projects.create') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg shadow-md transition duration-300">
                    + New Project
                </a>
            </div>

            @if ($projects->isEmpty())
                <div class="text-center bg-transparent p-8 rounded-lg shadow-2xl">
                    <p class="text-gray-700 text-lg">You don't have any projects yet.</p>
                    <a href="{{ route('projects.create') }}"
                        class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                        Create Your First Project
                    </a>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($projects as $project)
                        <div
                            class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 flex flex-col">
                            <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ $project->name }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $project->description }}</p>
                            <div class="mt-auto flex space-x-4">
                                <a href="{{ route('projects.show', $project) }}"
                                    class="text-green-600 hover:text-green-700 hover:bg-slate-400 hover:rounded-2xl hover:p-[2px] font-medium ">
                                    View
                                </a>
                                <a href="{{ route('projects.edit', $project) }}"
                                    class="text-blue-600 hover:bg-slate-400 hover:rounded-2xl hover:p-[2px] font-medium">
                                    Edit
                                </a>
                                <form method="POST" action="{{ route('projects.destroy', $project) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-red-600 hover:bg-slate-400 hover:rounded-2xl hover:p-[2px] font-medium">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </main>

</body>

</html>
