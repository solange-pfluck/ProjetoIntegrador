<?php 
    
     
    include_once ""




    if(isset($_GET['classe'])){
        $classe = $_GET['classe'];
        $classeControlador = new $classe();
        if(isset($_GET['acao'])){
            $acao = $_GET['acao'];
            $classeControlador->$acao();
        }elseif(isset($_POST['acao'])){
                 $acao = $_POST['acao'];
                 $classeControlador->$acao();
         }
     }



    





?>