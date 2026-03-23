<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Create Task</h1>

        <form action="/tasks" method="POST" class="space-y-4">
            @csrf

            
            <div>
                <label class="block text-gray-700 font-medium mb-1">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Description -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Description</label>
                <textarea 
                    name="description" 
                    rows="3"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                ></textarea>
            </div>

            <!-- Checkbox -->
            <div class="flex items-center">
                <input 
                    type="checkbox" 
                    name="is_completed" 
                    value="1"
                    class="h-4 w-4 text-blue-500 border-gray-300 rounded focus:ring-blue-500"
                >
                <label class="ml-2 text-gray-700">Completed</label>
            </div>

            <!-- Button -->
            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200"
            >
                Save
            </button>
        </form>

        <!-- Back Link -->
        <div class="mt-4 text-center">
            <a href="/tasks" class="text-blue-500 hover:underline">Back</a>
        </div>
    </div>

</body>
</html>