<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($nome, $sobrenome=null){
		$name = ucfirst($nome);
		$nickname = ucfirst($sobrenome);	
		return "Bem-vindo {$name} {$nickname}!";
    }
}
