<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    	// return 'Usuários';

    	if (request()->has('empty')) {
	    	$users = [];
    	} else {
	    	$users = [
	    		'Joel',
	    		'Ellie',
	    		'Tess',
	    		'Tommy',
	    		'Bill'
	    	];
    	}

    	/* Primeira forma de passar os dados */

    	// return view('users', [
    	// 	'users' => $users,
    	// 	'title' => 'Listagem de usuários'
    	// ]);


		/* Segunda forma de passar os dados */

    	// return view('users')
    	// 	->with('users', $users)
    	// 	->with('title', 'Listagem de usuários');


		/* Terceira forma de passar os dados */

    	$title = 'Listagem de usuários';

		/* Fazendo um dump die antes de passar os dados */
		// dd(compact('users','title'));

    	return view('users', compact('users','title'));

    }

    public function show($id){
		return "Mostrando detalhes do usuário $id";
    }

    public function create(){
    	return "Criar novo usuário";
    }

}
