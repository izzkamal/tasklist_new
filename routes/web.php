<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);
Route::post('/tasks/store', [TaskController::class, 'store'])->name('task.store');
Route::delete('/tasks/delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
Route::post('/tasks/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/tasks/update/{id}', [TaskController::class, 'update'])->name('task.update');
