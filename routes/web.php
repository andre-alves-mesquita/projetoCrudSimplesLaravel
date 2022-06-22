<?php

use App\Http\Controllers\ServicosListagem;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ServicosListagem::class, 'index'])->name('listar-servicos');
Route::get('/listagem', [ServicosListagem::class, 'index']);
Route::get('/listagem/criar', [ServicosListagem::class, 'create'])->name('form-criar-servico');
Route::post('/listagem/criar', [ServicosListagem::class, 'store']);
Route::delete('/listagem/{id}', [ServicosListagem::class, 'destroy']);
