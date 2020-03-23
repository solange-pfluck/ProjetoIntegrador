<?php

class Exame {
    private $id_exame;
    private $tipo;
    private $resultado;
    private $data;
    
    function __construct($tipo, $resultado, $data) {
        $this->tipo = $tipo;
        $this->resultado = $resultado;
        $this->data = $data;
    }
    function getId_exame() {
        return $this->id_exame;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getResultado() {
        return $this->resultado;
    }

    function getData() {
        return $this->data;
    }

    function setId_exame($id_exame): void {
        $this->id_exame = $id_exame;
    }

    function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    function setResultado($resultado): void {
        $this->resultado = $resultado;
    }

    function setData($data): void {
        $this->data = $data;
    }



}


    

