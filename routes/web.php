<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
	return 'Home';
});

// Route::get('/usuarios', function(){
// 	return 'Usuários';
// });

// Route::get('/usuarios/{id}', function($id){
// 	// return 'Mostrando detalhes do usuário ' . $id;
// 	return "Mostrando detalhes do usuário $id";
// })  -> where('id','[0-9]+');   // ou -> where('id', '\d+');

// Route::get('/usuarios/novo', function(){
// 	return "Criar novo usuário";
// });

// Route::get('/saudar/{nome}/{sobrenome?}', function($nome, $sobrenome = null){
// 	$name = ucfirst($nome);
// 	$nickname = ucfirst($sobrenome);	
// 	return "Bem-vindo {$name} {$nickname}!";
// });

/* ========================================================================= */

Route::get('/usuarios', 'UserController@index');
Route::get('/usuarios/{id}', 'UserController@show')-> where('id','[0-9]+');
Route::get('/usuarios/novo', 'UserController@create');
Route::get('/saudar/{nome}/{sobrenome?}', 'WelcomeUserController@index');








