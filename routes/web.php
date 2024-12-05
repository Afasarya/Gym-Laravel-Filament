<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('/recipes/index');
});

Route::resource('recipes', RecipeController::class);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
Route::get('/admin/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('admin.contacts.edit');
Route::delete('/admin/contacts/{contact}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');