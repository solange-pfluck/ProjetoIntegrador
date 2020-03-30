<?php

#login, peso, data_nascimento, senha, sexo, nome, CPF, email, altura, id_usuario



class Usuario{
    private $login; 
    private $peso;
    private $data_nascimento;
    private $senha;
    private $sexo;
    private $nome;
    private $CPF;
    private $email;
    private $altura;
    private $id_usuario;

     public function Usuario($login, $peso, $data_nascimento, $senha, $sexo, $nome, $CPF, $email, $altura, $id_usuario){
        $this->login = $login;
        $this->peso = $peso;
        $this->data_nascimento = $data_nascimento;
        $this->senha = $senha;
        $this->sexo = $sexo;
        $this->nome = $nome;
        $this->CPF = $CPF;
        $this->email = $email;
        $this->altura = $altura;
        $this->id_usuario = $id_usuario;        
     }
     #login
     function setLogin($login): void {
        $this->login = $login;
    }


    function getLogin() {
        return $this->login;
    }

    #peso
     function setPeso($peso1): void {
        $this->peso = $peso;
    }


    function getPeso() {
        return $this->peso;
    }


    #data de nascimento
     function setData_nascimento($data_nascimento): void {
        $this->data_nascimento = $data_nascimento;
    }


    function getData_Nascimento() {
        return $this->data_nascimento;
    }

    #senha
     function setSenha($senha): void {
        $this->senha = $senha;
    }


    function getSenha() {
        return $this->senha;
    }

    #sexo
     function setSexo($sexo): void {
        $this->sexo = $sexo;
    }


    function getSexo() {
        return $this->sexo;
    }


    #nome
     function setNome($nome): void {
        $this->nome = $nome;
    }


    function getNome() {
        return $this->login;
    }

    #CPF
     function setCPF($CPF): void {
        $this->CPF = $CPF;
    }


    function getCPF() {
        return $this->CPF;
    }

    #email
     function setEmail($email): void {
        $this->email = $email;
    }


    function getEmail() {
        return $this->login;
    }

    #altura
     function setAltura($altura): void {
        $this->altura = $altura;
    }


    function getAltura() {
        return $this->login;
    }

    #id_usuario
     function setId_usuario($id_usuario): void {
        $this->id_usuario = $id_usuario;
    }


    function getId_usuario(){
        return $this->id_usuario;
    }



     






}


?>