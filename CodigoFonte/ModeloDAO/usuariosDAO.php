+<?php

    require_once 'conexao.php';


    class usuarioDAO{
        
        private $conexao;

            public function __contruct(){
                $this-> Conexao::conectar();
            }               
            public function inserirUsuario(Usuario $usuario){
            $sql = "insert into usuario values(login, peso, data_nascimento, senha, sexo, nome, CPF, email, altura, id_usuario)  
            values('".$usuario->getLogin()."' , '".$usuario->getPeso()."' , '".$usuario->getData_nascimento()"' , '".$usuario->getSenha()."' , '".$usuario->getSexo()."' , '".$usuario->getNome()."','".
            $usuario->getCPF()."' , '". $usuario->getEmail()."' , '".$usuario->getAltura()."','".$usuario->getId_usuario()."')";
                
            $resultado = mysqli_query($this->conexao, $sql) or die("Error SQL: ".mysqli_error($this->conexao)." -> ".$sql);

            if($resultado){
                echo "<script language='javascript'>alert('Dados salvos com sucesso!');</script>";
            }else{
                echo "<script language='javascript'>alert('Falha ao cadastrar!');</script>";
            }
        }


            }
        
        
            public function listarUsuario($id){}
        
            public function listarUsuarios(){}
        
            public function atualizarUsuarios($usuario){}
        
            public function excluirUsuarios($id){}
        
            public function autenticarUsuarios($id){}
        


    }    
    




?>