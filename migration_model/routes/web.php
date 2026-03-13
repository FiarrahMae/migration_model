<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
<<<<<<< HEAD
return view('welcome');
=======
    return view('welcome');
    //asddaas
>>>>>>> bea0bd2bbff609840fb0e0998b7cd427c84e2b4d
});

Route::resource('tasks', TaskController::class);

Route::get('/greet', [GreetController::class, 'index']);