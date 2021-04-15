<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTaskController;
use App\Http\Controllers\CompletedTaskController;
use App\Services\Twitter;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function (Twitter $Twitter) {
//     dd($Twitter);
// });

Route::get('/', function () {
    return view('index');
});

Route::resource('project', ProjectController::class);

Route::post('/project/{project}/task', [ProjectTaskController::class, 'store'])->name('project.task.store');
Route::patch('/tasks/{task}', [ProjectTaskController::class, 'update'])->name('project.task.update');