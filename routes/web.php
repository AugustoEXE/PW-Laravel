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
//        rotas de login            //
/************************************/

route::get('/login', [UsuariosController::class, 'login'])->name('login');

route::post('/login', [UsuariosController::class, 'login'])->name('login.effective');

route::get('/logout', [UsuariosController::class, 'logout'])->name('logout');
/************************************/
//        rotas de produtos          //
/************************************/

route::prefix('/produtos')->middleware('auth')->group(function () {

    route::get('', [ProdutosController::class, 'index'])->name('produtos');

    route::get('/add', [ProdutosController::class, 'add'])->name('produtos.add');

    route::get('/list', [ProdutosController::class, 'index'])->name('produtos.list');

    route::get('/{produto}', [ProdutosController::class, 'view'])->name('produtos.view');

    route::get('/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit');

    route::get('/delete/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');

    route::post('/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');

    route::post('/edit/{produto}', [ProdutosController::class, 'editSave'])->name('produtos.editSave');

    route::post('', [ProdutosController::class, 'index']);

    route::delete('/delete/{produto}', [ProdutosController::class, 'deleteForReal'])->name('produtos.deleteForReal');
});

/************************************/
//        rotas de usuarios         //
/************************************/

route::prefix('/usuarios')->middleware('auth')->group(function () {
    Route::get('', [UsuariosController::class, 'index'])->name('usuarios');

    Route::get('/create', [UsuariosController::class, 'create'])->name('usuarios.create');

    Route::post('/create', [UsuariosController::class, 'store'])->name('usuarios.store');

    route::get('/{usuario}', [UsuariosController::class, 'view'])->name('usuarios.view');

    route::get('/edit/{usuario}', [UsuariosController::class, 'edit'])->name('usuarios.edit');

    route::get('/delete/{usuario}', [UsuariosController::class, 'delete'])->name('usuarios.delete');

    route::delete('/delete/{usuario}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

    route::post('/edit/{usuario}', [UsuariosController::class, 'editSave'])->name('usuarios.editSave');
});
