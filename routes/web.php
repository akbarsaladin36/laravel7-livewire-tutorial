<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::livewire("/login",'login.index')->layout('app')->name('login.index');

Route::livewire("/",'user.index')->layout('app')->name('user.index');
Route::livewire("/create-users",'user.create')->layout('app')->name('user.create');
Route::livewire("/edit-user/{user_id}",'user.edit')->layout('app')->name('user.edit');

Route::livewire("/notes",'notes.index')->layout('app')->name('notes.index');
Route::livewire("/notes/create-notes",'notes.create')->layout('app')->name('notes.create');
Route::livewire("/notes/edit-notes/{note_id}",'notes.edit')->layout('app')->name('notes.edit');
