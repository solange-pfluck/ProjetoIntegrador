<?php


class Medico {
   private $id_medico;
   private $nome;
   private $CRM;
   
   function __construct($nome, $CRM) {
       $this->nome = $nome;
       $this->CRM = $CRM;
   }
   function getId_medico() {
       return $this->id_medico;
   }

   function getNome() {
       return $this->nome;
   }

   function getCRM() {
       return $this->CRM;
   }

   function setId_medico($id_medico): void {
       $this->id_medico = $id_medico;
   }

   function setNome($nome): void {
       $this->nome = $nome;
   }

   function setCRM($CRM): void {
       $this->CRM = $CRM;
   }



   
}

