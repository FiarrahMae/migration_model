<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link href="/css/output.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-yellow-100 via-pink-100 to-purple-100 flex items-center justify-center min-h-screen">

    <div class="bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-8 w-full max-w-md border border-white/40">
        
        <h1 class="text-2xl font-semibold text-gray-700 mb-6 text-center">
             Edit Task
        </h1>

        <form action="/tasks/{{ $task->id }}" method="POST" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div>
                <label class="block text-gray-600 mb-1 text-sm">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    value="{{ $task->title }}"
                    class="w-full px-4 py-2 rounded-lg border border-gray-200 bg-yellow-50 focus:outline-none focus:ring-2 focus:ring-yellow-300 transition"
                >
            </div>

            <!-- Description -->
            <div>
                <label class="block text-gray-600 mb-1 text-sm">Description</label>
                <textarea 
                    name="description" 
                    rows="3"
                    class="w-full px-4 py-2 rounded-lg border border-gray-200 bg-pink-50 focus:outline-none focus:ring-2 focus:ring-pink-300 transition"
                >{{ $task->description }}</textarea>
            </div>

            <!-- Checkbox -->
            <div class="flex items-center bg-purple-50 px-3 py-2 rounded-lg">
                <input 
                    type="checkbox" 
                    name="is_completed" 
                    value="1"
                    {{ $task->is_completed ? 'checked' : '' }}
                    class="h-4 w-4 text-purple-400 border-gray-300 rounded focus:ring-purple-300"
                >
                <label class="ml-2 text-gray-600 text-sm">Mark as completed</label>
            </div>

            <!-- Button -->
            <button 
                type="submit" 
                class="w-full bg-gradient-to-r from-yellow-300 via-pink-300 to-purple-300 text-white py-2 rounded-lg font-medium hover:opacity-90 transition duration-200 shadow-md"
            >
                Update Task
            </button>
        </form>

        <!-- Back Link -->
        <div class="mt-5 text-center">
            <a href="{{ route('tasks.index') }}" class="text-gray-500 hover:text-gray-700 text-sm transition">
                ← Back to Tasks
            </a>
        </div>

    </div>

</body>
</html>