<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use App\Models\Produto;
use App\Models\Usuario;
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

/************************************/
//        rotas de produtos          //
/************************************/

route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');

route::get('/produtos/add', [ProdutosController::class, 'add'])->name('produtos.add');

route::get('/produtos/list', [ProdutosController::class, 'index'])->name('produtos.list');

route::get('/produtos/{produto}', [ProdutosController::class, 'view'])->name('produtos.view');

route::get('/produtos/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit');

route::get('/produtos/delete/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');

route::post('/produtos/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');

route::post('/produtos/edit/{produto}', [ProdutosController::class, 'editSave'])->name('produtos.editSave');

route::post('/produtos', [ProdutosController::class, 'index']);

route::delete('/produtos/delete/{produto}', [ProdutosController::class, 'deleteForReal'])->name('produtos.deleteForReal');

/************************************/
//        rotas de usuarios         //
/************************************/

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');

Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');

Route::post('/usuarios/create', [UsuariosController::class, 'store'])->name('usuarios.store');

route::get('/usuarios/{usuario}', [UsuariosController::class, 'view'])->name('usuarios.view');

route::get('/usuarios/edit/{usuario}', [UsuariosController::class, 'edit'])->name('usuarios.edit');

route::get('/usuarios/delete/{usuario}', [UsuariosController::class, 'delete'])->name('usuarios.delete');

route::delete('/usuarios/delete/{usuario}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

route::post('/usuarios/edit/{usuario}', [UsuariosController::class, 'editSave'])->name('usuarios.editSave');
