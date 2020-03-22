<?php 
     class Conexao{
        private static $host = "localhost";
        private static $porta = "3306";
        private static $usuario = "root";
        private static $senha = "";
        private static $banco = "mydb";

        public static function conectar(){
            return mysqli_connect(Conexao::$host, Conexao::$usuario, Conexao::$senha, Conexao::$banco, Conexao::$porta);
        } or die()
    } 

?>