<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 flex items-center justify-center min-h-screen">

    <div class="bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-8 w-full max-w-md border border-white/40">

        <h1 class="text-2xl font-semibold text-gray-700 mb-6 text-center">
            📄 Task Details
        </h1>

        <!-- Title -->
        <div class="mb-5">
            <p class="text-gray-500 text-sm">Title</p>
            <p class="text-lg font-semibold text-gray-700 bg-blue-50 px-3 py-2 rounded-lg mt-1">
                {{ $task->title }}
            </p>
        </div>

        <!-- Description -->
        <div class="mb-5">
            <p class="text-gray-500 text-sm">Description</p>
            <p class="text-gray-700 bg-purple-50 px-3 py-2 rounded-lg mt-1 text-sm">
                {{ $task->description }}
            </p>
        </div>

        <!-- Status -->
        <div class="mb-6">
            <p class="text-gray-500 text-sm mb-1">Status</p>
            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full
                {{ $task->is_completed 
                    ? 'bg-green-100 text-green-600' 
                    : 'bg-yellow-100 text-yellow-600' }}">
                {{ $task->is_completed ? 'Completed' : 'Pending' }}
            </span>
        </div>

        <!-- Actions -->
        <div class="flex justify-between items-center">
            <a href="/tasks" 
               class="text-gray-500 hover:text-gray-700 text-sm transition">
                ← Back
            </a>

            <a href="/tasks/{{ $task->id }}/edit" 
               class="bg-gradient-to-r from-yellow-300 via-pink-300 to-purple-300 text-white px-4 py-2 rounded-lg text-sm shadow-md hover:opacity-90 transition">
                Edit Task
            </a>
        </div>

    </div>

</body>
</html>