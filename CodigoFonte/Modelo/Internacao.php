<?php


class Internacao {
    private $id_internacao;
    private $motivo;
    private $data_internacao;
    private $data_alta;
    
    function __construct($motivo, $data_internacao, $data_alta) {
        $this->motivo = $motivo;
        $this->data_internacao = $data_internacao;
        $this->data_alta = $data_alta;
    }
    function getId_internacao() {
        return $this->id_internacao;
    }

    function getMotivo() {
        return $this->motivo;
    }

    function getData_internacao() {
        return $this->data_internacao;
    }

    function getData_alta() {
        return $this->data_alta;
    }

    function setId_internacao($id_internacao): void {
        $this->id_internacao = $id_internacao;
    }

    function setMotivo($motivo): void {
        $this->motivo = $motivo;
    }

    function setData_internacao($data_internacao): void {
        $this->data_internacao = $data_internacao;
    }

    function setData_alta($data_alta): void {
        $this->data_alta = $data_alta;
    }



    
}
    

