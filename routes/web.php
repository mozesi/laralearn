<?php
use \App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;
use \App\Models\User;


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

/*
use of regex to match route parameters. 
this further helps in securing the application
*/
Route::get('/home/{id?}/name/{name}', function ($id = 3,$name) {
    return $name;
}) ->where('id','[0-9]+')->name('home.page');

/*
naming routes for easy reference in any part of the 
application. can use url('/home/page') function or naming the route as below.
naming is easier  for complex routes and linking by name is easier.
*/
Route::get('/home/page', function () {
    return view('welcome');
}) ->name('home.page');

/**
 * Route grouping
 * group routes with common characteristics like
 * --authentication, path prefix, controller name space
 * it less tedious, visual cues to future developers, apply shared configurations settings
 * 
 */

 Route::prefix('tasks')->group(function(){
    Route::get('home', [TasksController::class,'index'])->name('tasks.all');
    Route::get('create', [TasksController::class,'create'])->name('tasks.create'); 
    Route::post('store', [TasksController::class,'store'])->name('tasks.store');
});

/**
 * Model b
 */

Route::get('user/{user}',function(User $user){
    return $user;
});