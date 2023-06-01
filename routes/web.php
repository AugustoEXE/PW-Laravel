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

route::get('/', fn () => view('welcome'));

route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');

route::get('/produtos/add', [ProdutosController::class, 'add'])->name('produtos.add');

route::get('/produtos/list', [ProdutosController::class, 'index'])->name('produtos.list');


route::post('/produtos/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');
