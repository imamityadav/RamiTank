<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/welcome', function(){
//     dd("welcome Back..");
// });

Route::get('/', [HomeController::class , 'index']);
Route::get('/blank', function(){
  return view('home.blank');
});
Route::get('/blog', function(){
  return view('home.blog');
});
