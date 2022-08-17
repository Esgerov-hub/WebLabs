<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebLabs\IndexController;


Route::get('/',[IndexController::class,'index'])->name('webLabs.index');
Route::get('/abouts',[IndexController::class,'about'])->name('webLabs.about');
Route::get('/services',[IndexController::class,'service'])->name('webLabs.service');
Route::get('/services/id',[IndexController::class,'serviceDetails'])->name('webLabs.serviceDetails');
Route::get('/projects',[IndexController::class,'project'])->name('webLabs.project');
Route::get('/contacts',[IndexController::class,'contact'])->name('webLabs.contact');




Route::resource('abouts',\App\Http\Controllers\AdminPanel\AboutController::class);
Route::resource('services',\App\Http\Controllers\AdminPanel\ServiceController::class);
