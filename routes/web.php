<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OperationsController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ProductsController;

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

// Rota para nome e sobrenome
Route::get('/perfil/{nome}/{sobrenome?}', [UserController::class, 'showView'])->whereAlpha('nome')->whereAlpha('sobrenome');

// Rota para operações aritméticas
Route::get('/operacoes/soma/{num1}/{num2}', [OperationsController::class, 'doSum'])->whereNumber('num1')->whereNumber('num2');

Route::get('operacoes/divisao/{num1}/{num2}', [OperationsController::class, 'doDiv'])->whereNumber('num1')->whereNumber('num2');

Route::get('operacoes/multiplicacao/{num1}/{num2}', [OperationsController::class, 'doMul'])->whereNumber('num1')->whereNumber('num2');

Route::get('operacoes/subtracao/{num1}/{num2}', [OperationsController::class, 'doMin'])->whereNumber('num1')->whereNumber('num2');

// Rota para os dados-pessoais
Route::get('dados-pessoais/{nome}/{sobrenome}/{idade}/{rm}/{genero}/{endereco}', [PersonalController::class, 'showData'])->whereAlpha('nome','sobrenome','genero')->whereAlphaNumeric('endereco')->whereNumber('idade','rm');

//Rota para tabela de produtos
Route::get('produtos/{item1?}/{item2?}/{item3?}/{item4?}/{item5?}/{item6?}/{item?}', [ProductsController::class, 'showProducts'])->whereAlpha('item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7');
?>