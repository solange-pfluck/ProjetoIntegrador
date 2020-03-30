<?php

    require_once 'conexao.php'


    class usuarioDAO{
        private $conexao;

        
            public function __contruct(){
                $this->conexao = Conexao::conectar;


            }

        
        
            public function inserirUsuario(Usuario $usuario){}
        
        
            public function listarUsuario($id){}
        
            public function listarUsuarios(){}
        
            public function atualizarUsuarios($usuario){}
        
            public function excluirUsuarios($id){}
        
           


    }    
