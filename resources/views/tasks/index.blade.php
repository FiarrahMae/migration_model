<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f6f9;
            margin:0;
            padding:0;
        }

        .container{
            width:60%;
            margin:40px auto;
            background:white;
            padding:25px;
            border-radius:10px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }

        h1{
            text-align:center;
            color:#333;
        }

        .success{
            background:#d4edda;
            color:#155724;
            padding:10px;
            border-radius:5px;
            margin-bottom:15px;
        }

        .create-btn{
            display:inline-block;
            padding:10px 15px;
            background:#4CAF50;
            color:white;
            text-decoration:none;
            border-radius:5px;
            margin-bottom:20px;
        }

        .create-btn:hover{
            background:#45a049;
        }

        ul{
            list-style:none;
            padding:0;
        }

        li{
            background:#f9f9f9;
            margin-bottom:15px;
            padding:15px;
            border-radius:8px;
            border-left:5px solid #4CAF50;
        }

        .task-title{
            font-size:18px;
            font-weight:bold;
        }

        .task-status{
            font-size:14px;
            color:#666;
        }

        .task-desc{
            margin:5px 0 10px;
            color:#444;
        }

        .actions a{
            text-decoration:none;
            padding:6px 10px;
            margin-right:5px;
            border-radius:4px;
            font-size:14px;
        }

        .view{ background:#3498db; color:white; }
        .edit{ background:#f1c40f; color:white; }

        button{
            background:#e74c3c;
            color:white;
            border:none;
            padding:6px 10px;
            border-radius:4px;
            cursor:pointer;
        }

        button:hover{
            background:#c0392b;
        }
    </style>

</head>

<body>

<div class="container">

    <h1>Task List</h1>

            @if(session('success'))
                <div class="success">
                    {{ session('success') }}
                </div>
            @endif

        <a href="/tasks/create" class="create-btn">+ Create New Task</a>

        <ul>
            @forelse($tasks as $task)

        <li>

        <div class="task-title">{{ $task->title }}</div>

        <div class="task-status">
            Status: {{ $task->is_completed ? 'Completed' : 'Pending' }}
        </div>

        <div class="task-desc">
            {{ $task->description }}
        </div>

        <div class="actions">
            <a href="/tasks/{{ $task->id }}" class="view">View</a>
            <a href="/tasks/{{ $task->id }}/edit" class="edit">Edit</a>

        <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    </div>

</li>

        @empty
    <p>No tasks found.</p>
        @endforelse

    </ul>

    </div>

    </body>
</html>