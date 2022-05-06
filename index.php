<?php 

require './vendor/autoload.php';


use Core\ConfigController as routes;

//Instanciando Classe ConfigController
$url = new routes;

//Instanciando Method existente na Class ConfigController
$url->load();  