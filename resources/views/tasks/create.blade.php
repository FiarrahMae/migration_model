<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link href="/css/output.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 flex items-center justify-center min-h-screen">

    <div class="bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-8 w-full max-w-md border border-white/40">
        
        <h1 class="text-2xl font-semibold text-gray-700 mb-6 text-center">
             Create Task
        </h1>

        <form action="/tasks" method="POST" class="space-y-5">
            @csrf

            <!-- Title -->
            <div>
                <label class="block text-gray-600 mb-1 text-sm">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    placeholder="Enter task title..."
                    class="w-full px-4 py-2 rounded-lg border border-gray-200 bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-300 transition"
                >
            </div>

            <!-- Description -->
            <div>
                <label class="block text-gray-600 mb-1 text-sm">Description</label>
                <textarea 
                    name="description" 
                    rows="3"
                    placeholder="Write something..."
                    class="w-full px-4 py-2 rounded-lg border border-gray-200 bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-300 transition"
                ></textarea>
            </div>

            <!-- Checkbox -->
            <div class="flex items-center bg-pink-50 px-3 py-2 rounded-lg">
                <input 
                    type="checkbox" 
                    name="is_completed" 
                    value="1"
                    class="h-4 w-4 text-pink-400 border-gray-300 rounded focus:ring-pink-300"
                >
                <label class="ml-2 text-gray-600 text-sm">Mark as completed</label>
            </div>

            <!-- Button -->
            <button 
                type="submit" 
                class="w-full bg-gradient-to-r from-blue-300 via-purple-300 to-pink-300 text-white py-2 rounded-lg font-medium hover:opacity-90 transition duration-200 shadow-md"
            >
                Save Task
            </button>
        </form>

        <!-- Back Link -->
        <div class="mt-5 text-center">
            <a href="/tasks" class="text-gray-500 hover:text-gray-700 text-sm transition">
                ← Back to Tasks
            </a>
        </div>

    </div>

</body>
</html>