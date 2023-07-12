<?php

use App\Http\Controllers\ProdutosController;
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

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'produtos'], function () {
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
    Route::get('/cadastrar', [ProdutosController::class, 'cadastrar'])->name('produto.cadastrar');
    Route::post('/store', [ProdutosController::class, 'store'])->name('produto.store');
    Route::delete('/{id}', [ProdutosController::class, 'delete'])->name('produto.delete');
});
