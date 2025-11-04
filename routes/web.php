<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;

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

route::get('/hello', function () {
    return "Hello, World!";
});



route::get('/home', [PageController::class, 'home']);
route::get('/login', [PageController::class, 'login'])-> name('login');
route::get('/data', [PageController::class, 'data'])->name('data');
route::resource('books', BookController::class);
Route::resource('students', StudentController::class);
Route::resource('employees', EmployeeController::class);





