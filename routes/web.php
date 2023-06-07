<?php

use App\Http\Controllers\ProdutosController;
use App\Models\Produto;
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

route::get('/', fn () => view('welcome'))->name('home');

route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');

route::get('/produtos/add', [ProdutosController::class, 'add'])->name('produtos.add');

route::get('/produtos/list', [ProdutosController::class, 'index'])->name('produtos.list');

route::get('/produtos/{produto}', [ProdutosController::class, 'view'])->name('produtos.view');

route::get('/produtos/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit');

route::get('/produtos/delete/{produto}', [Produto::class, 'delete'])->name('produtos.delete');

route::post('/produtos/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');

route::post('/produtos/edit/{produto}', [ProdutosController::class, 'editSave'])->name('produtos.editSave');

route::post('/produtos/edit/{produto}', [ProdutosController::class, 'deleteForReal'])->name('produtos.deleteForReal');
