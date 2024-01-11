<?php
class BaseDatos{

    public function conectar(){
        try{
            return new PDO('mysql:host=localhost;dbname=proyecto-1b-cesw','root','');
        }catch (Exception $e){
            die($e->getMessage());
        }
    }
}
?>