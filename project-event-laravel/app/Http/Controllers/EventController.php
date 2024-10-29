<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //rota principal da aplicação
    public function index(){

        $nome = 'Edimar';
        $idade = 30;
        $profissao = 'N1';
    
        $arr = [10,20,30,40,50];
    
        $nomes = ['Edimar', 'João', 'Maria', 'José'];
        
        return view('welcome', 
        [       
            'nome' => $nome, 
            'idade' => $idade,
            'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
