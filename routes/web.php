<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientesController;
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

    Route::get('/storeUpdate/{id}', [ProdutosController::class, 'storeUpdate'])->name('produto.storeUpdate');
    Route::put('/update/{id}', [ProdutosController::class, 'update'])->name('produto.update');

    Route::delete('/delete/{id}', [ProdutosController::class, 'delete'])->name('produto.delete');

});
Route::group(['prefix' => 'clientes'], function () {
    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');

    Route::get('/cadastrar', [ClientesController::class, 'cadastrar'])->name('clientes.cadastrar');
    Route::post('/store', [ClientesController::class, 'store'])->name('clientes.store');

    Route::get('/storeUpdate/{id}', [ClientesController::class, 'storeUpdate'])->name('clientes.storeUpdate');
    Route::put('/update/{id}', [ClientesController::class, 'update'])->name('clientes.update');

    Route::delete('/delete/{id}', [ClientesController::class, 'delete'])->name('clientes.delete');

});