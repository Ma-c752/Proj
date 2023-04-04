<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('about', function () {

    $name = 'Mahmoud';
    if (isset($_POST['name']))
        $name = $_POST['name'];
    return view('about', compact('name'));
});

Route::get('tasks', function () {
    $tasks = ['Task1', 'Task2', 'Task3'];
    return view('tasks', compact('tasks'));
});

Route::get('/tasksDB', function () {
    return view('master/app');
});

Route::get('/tasksop', function () {
    return view('tasksDB');
});

Route::get('/', [TaskController::class, 'all'])->name('tasks');
Route::post('/insert', [TaskController::class, 'add'])->name('task.insert');
Route::delete('/delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
Route::put('/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
