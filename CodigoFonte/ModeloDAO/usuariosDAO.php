<?php

    require_once 'conexao.php'


    class usuarioDAO{
        
        private $conexao;

            public function __contruct(){
                $this-> Conexao::conectar();

            }
        
        
        
            public function inserirUsuario(Usuario $usuario){
                  $sql = "insert into usuario(id_usuario, nome, peso, data_nascimento, senha, CPF, sexo, email, altura) values  "


            }
        
        
            public function listarUsuario($id){}
        
            public function listarUsuarios(){}
        
            public function atualizarUsuarios($usuario){}
        
            public function excluirUsuarios($id){}
        
            public function autenticarUsuarios($id){}
        


    }    
    




?>