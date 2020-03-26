<?php

class Consulta {
    private $id_consulta;
    private $especialidade;
    private $motivo_consulta;
    private $data_consulta;
    
    public function __construct($especialidade, $motivo_consulta, $data_consulta){ 
        $this->especialidade = $especialidade;
        $this->motivo_consulta = $motivo_consulta;
        $this->data_consulta = $data_consulta;
    }
     public function getId() {
        return $this->id_consulta;
    }
        
         public function getEspecialidade() {
        return $this->especialidade;
    
    }

    public function getMotivo() {
        return $this->motivo_consulta;
    }
    public function getData() {
        return $this->data_consulta;
    }
     public function setId($id_consulta) {
        $this->id_consulta = $id_consulta;
    }
    
     public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }
    
     public function setMotivo($motivo_consulta) {
        $this->motivo_consulta = $motivo_consulta;
    }
     public function setData($data_consulta) {
        $this->data_consulta = $data_consulta;
    }
    
    
}


