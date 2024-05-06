<?php

use App\Http\Controllers\ProjectCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::controller(ProjectCategoryController::class)->group(function () {
    Route::prefix('project_category')->group(function () {
        Route::get('/', 'index')->name('ProjectCategory.index');
        Route::get('/create', 'create')->name('project_category.create');
        Route::post('/store','store')->name('project_category.store');
        Route::get('/edit/{id}','edit')->name('project_category.edit');
        Route::post('/update/{id}','update')->name('project_category.update');
        Route::post('/update/{id}','update')->name('project_category.update');
        Route::delete('/destroy/{id}', 'destroy')->name('project_category.destroy');
    });
});
