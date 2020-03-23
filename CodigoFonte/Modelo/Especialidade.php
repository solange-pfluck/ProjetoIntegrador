<?php


class Especialidade {
    private $id_especialidade;
    private $id_medico;
            
    function __construct() {
        
    }
    function getId_especialidade() {
        return $this->id_especialidade;
    }
    function getId_medico() {
        return $this->id_medico;
    }
    

    function setId_especialidade($id_especialidade): void {
        $this->id_especialidade = $id_especialidade;
    }
    function setId_medico() {
        return $this->id_medico;
    }



}
