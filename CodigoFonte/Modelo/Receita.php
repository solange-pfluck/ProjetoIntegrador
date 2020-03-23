<?php


class Receita {
    private $id_receita;
    private $medicamento;
    private $posologia;
    private $data;
    
    function __construct($medicamento, $posologia, $data) {
        $this->medicamento = $medicamento;
        $this->posologia = $posologia;
        $this->data = $data;
    }
    function getId_receita() {
        return $this->id_receita;
    }

    function getMedicamento() {
        return $this->medicamento;
    }

    function getPosologia() {
        return $this->posologia;
    }

    function getData() {
        return $this->data;
    }

    function setId_receita($id_receita): void {
        $this->id_receita = $id_receita;
    }

    function setMedicamento($medicamento): void {
        $this->medicamento = $medicamento;
    }

    function setPosologia($posologia): void {
        $this->posologia = $posologia;
    }

    function setData($data): void {
        $this->data = $data;
    }



}


