<?php

use App\Livewire\Calculator;
use App\Livewire\CascadingDropdown;
use App\Livewire\Counter;
use App\Livewire\ImageUpload;
use App\Livewire\ProductSearch;
use App\Livewire\RegisterForm;
use App\Livewire\TodoList;
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

Route::redirect('/', 'counter')->name('root');
Route::get('/counter', Counter::class)->name('counter');
Route::get('/calculator', Calculator::class)->name('calculator');
Route::get('/todo-list', TodoList::class)->name('todo-list');
Route::get('/cascading-dropdown', CascadingDropdown::class)->name('cascading-dropdown');
Route::get('/product-search', ProductSearch::class)->name('product-search');
Route::get('/image-upload', ImageUpload::class)->name('image-upload');
Route::get('/registration-form', RegisterForm::class)->name('registration-form');
