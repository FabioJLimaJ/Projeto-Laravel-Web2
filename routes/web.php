<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;


Route::redirect('/', '/produtos');
// Route::get('/sobre', function () {
//     return view('sobre');
// });
Route::get('/sobre', [AppController::class, 'sobre']);

Route::get('/home', [AppController::class, 'home']);

Route::get('/produtos', [AppController::class, 'produtos']);

Route::get('/contato', [AppController::class, 'contato']);

Route::get('/frmproduto', [AppController::class, 'frmproduto']);
Route::post('/addproduto', [AppController::class, 'addproduto']);
Route::get('/frmusuario', [AppController::class, 'frmusuario']);
Route::post('/addusuario', [AppController::class, 'addusuario']);

Route::get('/usuarios', [AppController::class, 'usuarios']);

Route::get('/frmeditusuario/{id}', [AppController::class, 'frmeditusuario']);

Route::put('/atualizarusuario/{id}', [AppController::class, 'atualizarusuario']);

Route::delete('/excluirusuario/{id}', [AppController::class, 'excluirusuario']);

Route::get('/frmlogin', [AppController::class, 'frmlogin']);
Route::post('/logar', [AppController::class, 'logar']);
Route::get('/dashboard', [AppController::class, 'dashboard']);
Route::post('/logout', [AppController::class, 'logout']);

Route::get('/allprodutos', [AppController::class, 'allprodutos']);

Route::delete('/deletarproduto/{id}', [AppController::class, 'deletarproduto']);
Route::get('/frmeditproduto/{id}', [AppController::class, 'frmeditproduto']);
Route::put('/atualizarProduto/{id}', [AppController::class, 'atualizarProduto']);

Route::get('/allcontatos', [AppController::class, 'allcontatos']);
Route::post('/contato', [AppController::class, 'addcontato']);
Route::get('/allcontatos', [AppController::class, 'exibirFeedback']);



?>