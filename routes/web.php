<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;



// Route::get('/', function () {
//     return view('home');
    
// });
// route::view('contact','contact');
// route::view('about','about');

// // route::get('profile/{username}', function (Request $request){
//     route::get('profile/{username}', function ($username){
    

//     // $name = $request->name;
//     // return "My name is {$name}";

//     return view('profile',['name' => $username]);

// });

// Route::get('/',[HomeController::class,'index']);

//invoice : dalam class hanya ada 1 method
// Route::get('profile/{username}',[ProfileInformationController::class,'__invoke']);

Route::get('/', HomeController::class);

Route::middleware('auth')->group(function(){
    Route::resource('tasks', TaskController::class);
    Route::post('logout', LogoutController::class)->name('logout');
});


Route::get('users',[UserController::class,'index']);
Route::get('users/{user:username}',[UserController::class,'show'])->name('users.show');

Route::middleware('guest')->group(function(){
    Route::get('register',[RegistrationController::class,'create'])->name('register');
    Route::post('register',[RegistrationController::class,'store'])->name('register');
    Route::get('login',[LoginController::class,'create'])->name('login');
    Route::post('login',[LoginController::class,'store']);
});





// Route::get('tasks',[TaskController::class,'index']);
// Route::post('tasks',[TaskController::class,'store']);
// Route::get('tasks/{id}/edit',[TaskController::class,'edit']);
// Route::put('tasks/{id}',[TaskController::class,'update']);
// Route::delete('tasks/{id}',[TaskController::class,'destroy']);

