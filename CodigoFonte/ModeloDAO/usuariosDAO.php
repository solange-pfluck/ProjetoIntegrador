+<?php

    require_once 'conexao.php';


    class usuarioDAO{
        
        private $conexao;

            public function __contruct(){
                $this-> Conexao::conectar();
            }               
            public function inserirUsuario(Usuario $usuario){
            $sql = "insert into usuario values(login, peso, data_nascimento, senha, sexo, nome, CPF, emil, altura, id_usuario)  
            values('"$usuario->getLogin()"')"; 
            

            }
        
        
            public function listarUsuario($id){}
        
            public function listarUsuarios(){}
        
            public function atualizarUsuarios($usuario){}
        
            public function excluirUsuarios($id){}
        
            public function autenticarUsuarios($id){}
        


    }    
    




?>