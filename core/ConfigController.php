<?php

namespace Core;

class ConfigController
{
    //Atributos
    private string $url;
    private array $fullurl;
    private string $urlcontroller;
    private string $urlmethod;
    private string $urlparam;

    //Será executado ao executar a Classe
    public function __construct()
    {
        if(!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->fullurl = explode('/', $this->url);

            if((isset($this->fullurl[0])) AND (isset($this->fullurl[1]))){
                $this->urlcontroller = $this->fullurl[0];
                $this->urlmethod = $this->fullurl[1];

            }else{
                $this->urlcontroller = 'error';
                $this->urlmethod = 'index';
            }

        }else{
            $this->urlcontroller = 'home';
            $this->urlmethod = 'index';
        }
    }

    public function load(){
        
        $class = '\\App\\Controllers\\' . $this->urlcontroller;
        $classview = new $class;
        
        //method index
        $classview->index();
        
    }
}