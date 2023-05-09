<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\crudController;
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

Route::get('todo-list', [crudController::class, 'index']);
Route::get('add-todo', [crudController::class, 'addTodo']);
Route::post('save-todo', [crudController::class, 'saveTodo']);
Route::get('edit-todo/{id}', [crudController::class, 'editTodo']);
Route::post('update-todo', [crudController::class, 'updateTodo']);
Route::get('delete-todo/{id}', [crudController::class, 'deleteTodo']);



