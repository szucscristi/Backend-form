<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;



Route::get('/forms', [App/Http/Controllers/FormController::class, 'index']);
Route::post('/forms', [App/Http/Controllers/FormController::class, 'store'])

Route::get('/',function(){
    return view('welcome');
})