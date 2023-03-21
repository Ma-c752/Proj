<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
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
