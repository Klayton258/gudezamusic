<?php

namespace core\classes;

use PDO;
use PDOException;

class Database{
    private $ligacao;

    private function ligar(){

        $this->ligacao = new PDO(
            'mysql:'.
            'host='.MYSQL_SERVER.';'.
            'dbname='.MYSQL_DATABASE,
            MYSQL_USER,
            MYSQL_PASS,
            array(PDO::ATTR_PERSISTENT=>true)
        );

        $this->ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    private function desligar(){
        $this->ligacao=null;
    }

    public function select($sql,$parametros=null){

        $sql= trim($sql);
        $this->ligar();
        $resultado=null;
        
        try{
            if(!empty($parametros)){
                $executar= $this->ligacao->prepare($sql);
                $executar->execute($parametros); 
                $resultado= $executar->fetchAll(PDO::FETCH_CLASS);
            }else{
                $executar= $this->ligacao->prepare($sql);
                $executar->execute(); 
                $resultado= $executar->fetchAll(PDO::FETCH_CLASS);
            }
        }catch(PDOException $e){
            return false;
        }


        $this->desligar();
        return $resultado;
    }

    public function selectfetch($sql,$parametros=null){

        $sql= trim($sql);
        $this->ligar();
        $resultado=null;
        
        try{
            if(!empty($parametros)){
                $executar= $this->ligacao->prepare($sql);
                $executar->execute($parametros); 
                $resultado= $executar->fetch();
            }else{
                $executar= $this->ligacao->prepare($sql);
                $executar->execute(); 
                $resultado= $executar->fetch();
            }
        }catch(PDOException $e){
            return false;
        }
        $this->desligar();
        return $resultado;
    }
    
    public function insert($sql,$parametros=null){
        $sql= trim($sql);
        $this->ligar();
        
        try{
            if(!empty($parametros)){
                $executar= $this->ligacao->prepare($sql);
                $executar->execute($parametros); 
            }else{
                $executar= $this->ligacao->prepare($sql);
                $executar->execute(); 
            }
        }catch(PDOException $e){
            return false;
        }


        $this->desligar();
    }

    public function update($sql,$parametros=null){
        $sql= trim($sql);
        $this->ligar();
        
        try{
            if(!empty($parametros)){
                $executar= $this->ligacao->prepare($sql);
                $executar->execute($parametros); 
            }else{
                $executar= $this->ligacao->prepare($sql);
                $executar->execute(); 
            }
        }catch(PDOException $e){
            return false;
        }


        $this->desligar();
    }
    
    public function delete($sql,$parametros=null){
        $sql= trim($sql);
        $this->ligar();
        
        try{
            if(!empty($parametros)){
                $executar= $this->ligacao->prepare($sql);
                $executar->execute($parametros); 
            }else{
                $executar= $this->ligacao->prepare($sql);
                $executar->execute(); 
            }
        }catch(PDOException $e){
            return false;
        }


        $this->desligar();
    }
}