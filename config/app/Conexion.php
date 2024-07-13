<?php
    class Conexion{
        private $connect;

        public function __construct(){
            try {
                $this->connect = new PDO('mysql:host=localhost;dbname=gaviota', 'root','');
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Error en la conexion" . $e->getMessage();
            } 
        }

        public function conectar(){
            return $this->connect;
        }
    }
?>