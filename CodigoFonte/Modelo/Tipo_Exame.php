<?php


class Tipo_Exame {
    private $id_exame;
    private $descricao;
    
    function __construct($descricao) {
        $this->descricao = $descricao;
    }
    function getId_exame() {
        return $this->id_exame;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId_exame($id_exame): void {
        $this->id_exame = $id_exame;
    }

    function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }



}
