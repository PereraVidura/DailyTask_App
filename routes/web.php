<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $data=Task::all();

    return view('tasks')->with('tasks',$data);
});

//Route::post('/saveTask','TaskController@store');
Route::post('/saveTask', [TaskController::class, 'store']);

Route::get('/markascompleted/{id}', [TaskController::class, 'UpdateTaskAsCompleted']);

Route::get('/markasnotcompleted/{id}', [TaskController::class, 'UpdateTaskAsNotCompleted']);

Route::get('/deletetask/{id}', [TaskController::class, 'deletetask']);

Route::get('/updatetask/{id}', [TaskController::class, 'updatetaskview']);

Route::post('/updateTask', [TaskController::class, 'updatetask']);

