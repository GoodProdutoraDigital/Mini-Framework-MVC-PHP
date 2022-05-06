<?php

namespace App\Models;

use Exception;

use PDO;

class Conn
{
    //Atributos
    private string $db = 'mysql';
    private string $host = 'localhost';
    private string $database = 'celke';
    private string $user = 'root';
    private string $pass = '';
    private int $port = 3306;
    //Method
    private object $connect;

    public function connect()
    {
        try {
            $this->connect = new PDO($this->db. ':host='. $this->host . ';port=' . $this->port 
            . ';dbname=' .$this->database, $this->user, $this->pass);
            return $this->connect;
        } catch (Exception $ex) {
            die('Erro ao conectar ao banco de Dados');
        }
    }

}