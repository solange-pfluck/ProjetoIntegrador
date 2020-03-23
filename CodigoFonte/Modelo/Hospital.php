<?php


class Hospital {
    private $nome;
    private $id_internacao;
    
    function __construct() {
        
    }
    function getNome() {
        return $this->nome;
    }

    function getId_internacao() {
        return $this->id_internacao;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setId_internacao($id_internacao): void {
        $this->id_internacao = $id_internacao;
    }



}
