<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
                        CargoController,
                        ClienteController,
                        EnderecoController,
                        PedidoController,
                        ProdutoController,
                        ProdutoTamanhoController,
                        ProfileController,

};
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * Cargos
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 */

Route::prefix('cargos')
            ->controller(CargoController::class)
            ->group(function () {
                Route::get('/', 'index')
                        ->name('cargo.index');

                Route::get('/novo','create')
                        ->name('cargo.create');

                Route::get('/{id}','show')
                        ->name('cargo.show');

                Route::get('/editar/{id}','edit')
                        ->name('cargo.edit');

                Route::post('/store','store')
                        ->name('cargo.store');

                Route::post('/update','update')
                        ->name('cargo.update');

                Route::post('/destroy','destroy')
                        ->name('cargo.destroy');


            });


            /**
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * clientes
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 */

Route::prefix('clientes')
->controller(ClienteController::class)
->group(function () {
    Route::get('/', 'index')
            ->name('cliente.index');

    Route::get('/novo','create')
            ->name('cliente.create');

    Route::get('/{id}','show')
            ->name('cliente.show');

    Route::get('/editar/{id}','editar')
            ->name('cliente.edit');

    Route::post('/store','store')
            ->name('cliente.store');

    Route::post('/update','update')
            ->name('cliente.update');

    Route::post('/destroy','destroy')
            ->name('cliente.destroy');


});


/**
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * Enderecos
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 */

 Route::prefix('enderecos')
 ->controller(EnderecoController::class)
 ->group(function () {
     Route::get('/', 'index')
             ->name('endereco.index');

     Route::get('/novo','create')
             ->name('endereco.create');

     Route::get('/{id}','show')
             ->name('endereco.show');

     Route::get('/editar/{id}','editar')
             ->name('endereco.edit');

     Route::post('/store','store')
             ->name('endereco.store');

     Route::post('/update','update')
             ->name('endereco.update');

     Route::post('/destroy','destroy')
             ->name('endereco.destroy');


 });


 /**
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * Pedidos
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 */

Route::prefix('pedidos')
->controller(PedidoController::class)
->group(function () {
    Route::get('/', 'index')
            ->name('pedido.index');

    Route::get('/novo','create')
            ->name('pedido.create');

    Route::get('/{id}','show')
            ->name('pedido.show');

    Route::get('/editar/{id}','editar')
            ->name('pedido.edit');

    Route::post('/store','store')
            ->name('pedido.store');

    Route::post('/update','update')
            ->name('pedido.update');

    Route::post('/destroy','destroy')
            ->name('pedido.destroy');


});


/**
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * Produtos
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 */

 Route::prefix('produtos')
 ->controller(ProdutoController::class)
 ->group(function () {
     Route::get('/', 'index')
             ->name('produto.index');

     Route::get('/novo','create')
             ->name('produto.create');

     Route::get('/{id}','show')
             ->name('produto.show');

     Route::get('/editar/{id}','editar')
             ->name('produto.edit');

     Route::post('/store','store')
             ->name('produto.store');

     Route::post('/update','update')
             ->name('produto.update');

     Route::post('/destroy','destroy')
             ->name('produto.destroy');


 });

 /**
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * ProdutoTamanho
 *------------------------------------------------------------------------------------------------------------------------------------------------------------------
 */

 Route::prefix('tamanhos')
 ->controller(ProdutoTamanhoController::class)
 ->group(function () {
     Route::get('/', 'index')
             ->name('tamanho.index');

     Route::get('/novo','create')
             ->name('tamanho.create');

     Route::get('/{id}','show')
             ->name('tamanho.show');

     Route::get('/editar/{id}','editar')
             ->name('tamanho.edit');

     Route::post('/store','store')
             ->name('tamanho.store');

     Route::post('/update','update')
             ->name('tamanho.update');

     Route::post('/destroy','destroy')
             ->name('tamanho.destroy');


 });


require __DIR__.'/auth.php';
