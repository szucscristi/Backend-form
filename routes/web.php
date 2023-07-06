<?php
use App\Http\Controllers\CategoriiController;
use Illuminate\Support\Facades\Route;

Route::get('/categorii', [CategoriiController::class, 'index']);
Route::get('/categorii/{id}', [CategoriiController::class, 'show']);
//Route::get('/forms', [App/Http/Controllers/FormController::class, 'index']);
//Route::post('/forms', [App/Http/Controllers/FormController::class, 'store'])

/*Route::get('/',function(){
    return view('welcome');
})*/