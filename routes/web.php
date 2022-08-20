<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebLabs\IndexController;


Route::get('/',[IndexController::class,'index'])->name('webLabs.index');
Route::get('/abouts',[IndexController::class,'about'])->name('webLabs.about');
Route::get('/services',[IndexController::class,'service'])->name('webLabs.service');
Route::get('/services/{title}',[IndexController::class,'serviceDetails'])->name('webLabs.serviceDetails');
Route::get('/projects',[IndexController::class,'project'])->name('webLabs.project');
Route::get('/contacts',[IndexController::class,'contact'])->name('webLabs.contact');
Route::post('/contacts',[IndexController::class,'contactPost'])->name('webLabs.contact.store');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [\App\Http\Controllers\AdminPanel\LoginConroller::class, 'index']);
    Route::post('/login', [\App\Http\Controllers\AdminPanel\LoginConroller::class, 'login'])->name('login');

});
Route::group(['prefix'=> '/home','middleware' => ['auth']],function ()
{
    Route::post('logout', [\App\Http\Controllers\AdminPanel\LoginConroller::class, 'logout'])->name('logout');

    Route::get('/',[\App\Http\Controllers\AdminPanel\IndexController::class,'index'])->name('admin.index');
    Route::resource('abouts',\App\Http\Controllers\AdminPanel\AboutController::class);
    Route::resource('services',\App\Http\Controllers\AdminPanel\ServiceController::class);
    Route::resource('projects',\App\Http\Controllers\AdminPanel\ProjectController::class);
    Route::resource('categories',\App\Http\Controllers\AdminPanel\CategoryController::class);
    Route::get('/contacts',[\App\Http\Controllers\AdminPanel\IndexController::class,'contacts'])->name('admin.contact');

});
