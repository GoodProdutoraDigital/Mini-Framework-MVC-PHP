<?php

namespace Core;

//route system
class ConfigView
{
    private string $route;
    private array $data;

    public function __construct($route, array $data)
    {
        $this->route = $route;
        $this->data = $data;
    }

    public function render(){
        if(file_exists('app/'. $this->route . '.php')){
            include 'app/'. $this->route . '.php';
        }else{
            echo "Erro ao renderizar {$this->route}";
        }
    }
}