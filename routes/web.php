<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\VendasController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::group(['prefix' => 'dasboard'], function () {
    Route::get('/', [DasboardController::class, 'index'])->name('dasboard.index');



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

Route::group(['prefix' => 'vendas'], function () {
    Route::get('/', [VendasController::class, 'index'])->name('vendas.index');

    Route::get('/cadastrar', [VendasController::class, 'cadastrar'])->name('vendas.cadastrar');
    Route::post('/store', [VendasController::class, 'store'])->name('vendas.store');

    Route::get('/storeUpdate/{id}', [VendasController::class, 'storeUpdate'])->name('vendas.storeUpdate');
    Route::put('/update/{id}', [VendasController::class, 'update'])->name('vendas.update');

    Route::delete('/delete/{id}', [VendasController::class, 'delete'])->name('vendas.delete');


    Route::get('/sendMailG/{id}', [VendasController::class, 'sendMailG'])->name('vendas.sendMailG');
});