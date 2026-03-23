<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">

        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Task Details</h1>

        
        <div class="mb-4">
            <p class="text-gray-600 font-medium">Title:</p>
            <p class="text-lg font-semibold text-gray-800">{{ $task->title }}</p>
        </div>

        
        <div class="mb-4">
            <p class="text-gray-600 font-medium">Description:</p>
            <p class="text-gray-700">{{ $task->description }}</p>
        </div>

       
        <div class="mb-6">
            <p class="text-gray-600 font-medium">Status:</p>
            <span class="inline-block px-3 py-1 text-sm rounded-full 
                {{ $task->is_completed ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                {{ $task->is_completed ? 'Completed' : 'Pending' }}
            </span>
        </div>

        
        <div class="flex justify-between">
            <a href="/tasks" 
               class="text-blue-500 hover:underline">
                ← Back
            </a>

            <a href="/tasks/{{ $task->id }}/edit" 
               class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
                Edit
            </a>
        </div>

    </div>

</body>
</html>