<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [BbsController::class, 'index']);
Route::get('/test', function() {
    if(DB::connection()->getDatabaseName()) {
        $name = DB::connection()->getDatabaseName();
        dd($name);
    }
    else {
        return 'error';
    }
});
Route::get('/{bb}', [BbsController::class, 'detail']);

//Named routes
Route::get('/', [BbsController::class, 'index'])->name('index');
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');
