<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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

Route::get('books/', [BookController::class, 'index'])->name('books.index');
Route::get('books/{book}/show', [BookController::class, 'show'])->name('books.show');
Route::get('books/create', [BookController::class, 'create'])->name('books.create');
Route::post('books', [BookController::class, 'store'])->name('books.store');
Route::get('books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('books', [BookController::class, 'update'])->name('books.update');
Route::delete('books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
// Route::get('customer/',[CustomerController::class,'index'])->name('customer.index');

Route::get('teachers/', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('teachers/create', [TeacherController::class, 'create'])->name('teachers.create');;
Route::post('teachers', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('teachers/{teacher}/show', [TeacherController::class, 'show'])->name('teachers.show');
Route::get('teachers/{teacher}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::put('teachers', [TeacherController::class, 'update'])->name('teachers.update');
Route::delete('teachers/{teacher}', [TeacherController::class, 'destroy'])->name('teachers.destroy');
