<?php

namespace App\Models;

//Herança Conn
class Select extends Conn
{
    private object $conn;

    public function list(){
        
        $this->conn = $this->connect();

        $query = "SELECT * FROM artigos ORDER BY id DESC LIMIT 40";
        $cmd = $this->conn->prepare($query);
        $cmd->execute();
        
        $result = $cmd->fetchAll();
        return $result; 
    }

    public function selectById($id){

        $this->conn = $this->connect();

        $query = "SELECT * FROM artigos WHERE id = :uid";
        $cmd = $this->conn->prepare($query);
        $cmd->bindValue(':uid', $id);
        $cmd->execute();

        $result = $cmd->fetchAll();
        return $result;
    }
}