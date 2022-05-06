<?php

namespace App\Controllers;

class Login
{

    private array $dados;

    public function index()
    {
        //Instanciar Class
        $select = new \App\Models\Select();        
        $this->dados['artigos'] = $select->selectById('3');

        //Objeto loadview
        $loadView = new \Core\ConfigView('Views/login/login', $this->dados);
        $loadView->render();
    }
}