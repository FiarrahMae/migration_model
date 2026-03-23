<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">

        <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Task List</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Create Button -->
        <div class="mb-6 text-right">
            <a href="/tasks/create" 
               class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
               + Create New Task
            </a>
        </div>

        <!-- Task List -->
        <ul class="space-y-4">
            @forelse($tasks as $task)

            <li class="bg-gray-50 p-4 rounded-lg border-l-4 
                {{ $task->is_completed ? 'border-green-500' : 'border-yellow-400' }}">

                <!-- Title -->
                <div class="text-lg font-semibold text-gray-800">
                    {{ $task->title }}
                </div>

                <!-- Status -->
                <div class="text-sm text-gray-500">
                    Status: 
                    <span class="{{ $task->is_completed ? 'text-green-600' : 'text-yellow-600' }}">
                        {{ $task->is_completed ? 'Completed' : 'Pending' }}
                    </span>
                </div>

                <!-- Description -->
                <div class="mt-1 text-gray-600">
                    {{ $task->description }}
                </div>

                <!-- Actions -->
                <div class="mt-3 flex items-center space-x-2">

                    <a href="/tasks/{{ $task->id }}" 
                       class="bg-blue-500 text-white px-3 py-1 rounded-md text-sm hover:bg-blue-600">
                        View
                    </a>

                    <a href="/tasks/{{ $task->id }}/edit" 
                       class="bg-yellow-500 text-white px-3 py-1 rounded-md text-sm hover:bg-yellow-600">
                        Edit
                    </a>

                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button 
                            type="submit"
                            class="bg-red-500 text-white px-3 py-1 rounded-md text-sm hover:bg-red-600">
                            Delete
                        </button>
                    </form>

                </div>

            </li>

            @empty
                <p class="text-center text-gray-500">No tasks found.</p>
            @endforelse
        </ul>

    </div>

</body>
</html>