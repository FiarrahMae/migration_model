<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link href="/css/output.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 min-h-screen py-10">

    <div class="max-w-3xl mx-auto bg-white/80 backdrop-blur-md p-6 rounded-2xl shadow-xl border border-white/40">

        <h1 class="text-2xl font-semibold text-gray-700 text-center mb-6">
             Task List
        </h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <!-- Create Button -->
        <div class="mb-6 text-right">
            <a href="/tasks/create" 
               class="bg-gradient-to-r from-blue-300 via-purple-300 to-pink-300 text-white px-4 py-2 rounded-lg text-sm shadow-md hover:opacity-90 transition">
               + Create New Task
            </a>
        </div>

        <!-- Task List -->
        <ul class="space-y-4">
            @forelse($tasks as $task)

            <li class="bg-white/70 p-4 rounded-xl shadow-sm border border-gray-100">

                <!-- Title -->
                <div class="text-lg font-semibold text-gray-700">
                    {{ $task->title }}
                </div>

                <!-- Status -->
                <div class="text-sm mt-1">
                    <span class="px-2 py-1 rounded-full text-xs font-medium
                        {{ $task->is_completed 
                            ? 'bg-green-100 text-green-600' 
                            : 'bg-yellow-100 text-yellow-600' }}">
                        {{ $task->is_completed ? 'Completed' : 'Pending' }}
                    </span>
                </div>

                <!-- Description -->
                <div class="mt-2 text-gray-600 text-sm">
                    {{ $task->description }}
                </div>

                <!-- Actions -->
                <div class="mt-4 flex items-center space-x-2">

                    <a href="/tasks/{{ $task->id }}" 
                       class="bg-blue-200 text-blue-700 px-3 py-1 rounded-md text-xs hover:bg-blue-300 transition">
                        View
                    </a>

                    <a href="/tasks/{{ $task->id }}/edit" 
                       class="bg-purple-200 text-purple-700 px-3 py-1 rounded-md text-xs hover:bg-purple-300 transition">
                        Edit
                    </a>

                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button 
                            type="submit"
                            class="bg-pink-200 text-pink-700 px-3 py-1 rounded-md text-xs hover:bg-pink-300 transition">
                            Delete
                        </button>
                    </form>

                </div>

            </li>

            @empty
                <p class="text-center text-gray-500 text-sm">No tasks found.</p>
            @endforelse
        </ul>

    </div>

</body>
</html>